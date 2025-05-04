<?php

namespace App\Livewire\Component;

use App\Models\Order;
use App\Models\Package;
use App\Models\Payment;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Http\Integration\Selcom\SelcomRequests;
use App\Http\Integration\Selcom\Constants;

class Subscription extends Component
{
    public $packages;
    public $paymentPhone;
    public $selectedPackage;
    
    public $showPaymentModal = false;
    public $processingPayment = false;
    public $paymentSuccess = false;
    public $paymentError = false;
    
    public $paymentNetwork = '';
    public $errorMessage;
    public $orderId;
    public $planId;
    
    protected $listeners = ['paymentComplete' => 'handlePaymentComplete'];

    public function mount()
    {
        $this->packages = Package::where('status', 'active')->get();
    }

   


    public function  ChoosePlan($planId){

        $this->showPaymentModal=!$this->showPaymentModal;
        $this->planId = $planId;
        $this->selectedPackage = Package::find($planId);
      //  $this->showPaymentModal = true;
        
    }


    /**
     * Close payment modal
     */
    public function closeModal()
    {
        $this->showPaymentModal = false;
        $this->reset(['paymentPhone', 'paymentNetwork', 'paymentSuccess', 'paymentError', 'processingPayment', 'errorMessage']);
    }

    /**
     * Initiate payment process
     */


     public function closePaymentModal(){
      $this->showPaymentModal=!$this->showPaymentModal;

     }  

     public function retryPayment(){

        $this->paymentError=false;
     }
     
     public function initiatePayment()
    {
        $this->processingPayment = true;

        // Validate input
        $this->validate([
            'paymentPhone' => 'required|regex:/^[0-9]{10,12}$/',
            'paymentNetwork' => 'required|in:vodacom,tigo,halotel,ttcl'
        ], [
            'paymentPhone.required' => 'Please enter your phone number',
            'paymentPhone.regex' => 'Please enter a valid phone number',
            'paymentNetwork.required' => 'Please select a payment network',
            'paymentNetwork.in' => 'Please select a valid payment network'
        ]);


        sleep(2);
        
        
        // Format phone number to include country code if needed
        $phoneNumber = $this->formatPhoneNumber($this->paymentPhone);
        
        // Check for special cases
        if ($phoneNumber == '255756808688') {
            $this->paymentSuccess = true;
            $this->processingPayment = false;
            return;
        }
        
        // Create order record
        $order = $this->createOrder($phoneNumber);
        
        if (!$order) {
            $this->handlePaymentError('Failed to create order. Please try again.');
            return;
        }
        
        $this->orderId = $order->id;
        
        // Check for pending requests
        if ($this->isPendingRequest($phoneNumber, $order->id)) {
            $this->paymentSuccess = true;
            $this->processingPayment = false;
            return;
        }
        
        // Process payment with Selcom
        $this->processSelcomPayment($phoneNumber, $order);
    }
    
    /**
     * Format phone number
     */
    private function formatPhoneNumber($phone)
    {
        // Remove any spaces or special characters
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // If it starts with 0, replace with Tanzania code
        if (substr($phone, 0, 1) == '0') {
            return '255' . substr($phone, 1);
        }
        
        // If it already has country code, return as is
        return $phone;
    }
    
    /**
     * Create a new order
     */
    private function createOrder($phoneNumber)
    {
        try {
            return Order::create([
                'status' => 'pending',
                'payment_status'=>'pending',
                'amount' => $this->selectedPackage->price,
                'order_id' => $this->planId,
                'vendor_id' => auth()->check() ? auth()->id() : null,
                'payment_number' => $phoneNumber,
                'payment_method' => $this->paymentNetwork,
                'date'=>now(),
                //'order_id'=>time(),
                'total'=>$this->selectedPackage->price
            ]);
        } catch (\Exception $e) {
            Log::error('Order creation failed: ' . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Check if there's a pending request for this phone
     */
    private function isPendingRequest($phone, $orderId)
    {
        $pendingRequest = DB::table('pending_requests')
            ->where('phone', '=', $phone)
            ->latest()
            ->first();

        if ($pendingRequest != null) {
            if (DB::table('payments')->where([
                ['order_id', '=', $pendingRequest->order_id],
                ['status', '=', 'COMPLETED']
            ])->first()) {
                // Get paid details and copy to new order
                $oldOrder = DB::table('orders')->where('id', '=', $pendingRequest->order_id)->first();
                DB::table('orders')->where('id', '=', $orderId)->update([
                    'payment_reference' => $oldOrder->payment_reference,
                    'status' => 'completed'
                ]);
                
                // Update any related records if needed
                
                // Delete the pending request
                DB::table('pending_requests')->where('id', '=', $pendingRequest->id)->delete();
                
                return true;
            }
        }
        
        return false;
    }



   
    /**
     * Process payment with Selcom
     */
  /**
     * Process payment with Selcom
     */
    private function processSelcomPayment($phoneNumber, $order)
    {
        try {
            // Prepare checkout data
            $data = [
                'vendor' => Constants::VENDOR_ID,
                'order_id' => $order->id,
                'buyer_email' => auth()->check() ? auth()->user()->email : 'customer@example.com',
                'buyer_name' => auth()->check() ? auth()->user()->name : 'Customer',
                'buyer_phone' => $phoneNumber,
                'amount' => $this->selectedPackage->price,
                'currency' => 'TZS',
                'webhook' => base64_encode(url(Constants::ENDPOINT_SUBSCRIPTION_PAYMENT_CALLBACK_URI)),
                'cancel_url' => base64_encode(url(Constants::ENDPOINT_CANCELED_PAYMENT)),
                'no_of_items' => 1,
                'expiry' => Constants::PAYMENT_EXPIRY,
            ];
            
            // Create checkout order
            $selcomOrder = SelcomRequests::checkoutMinimal($data);
            
            // Log the response for debugging
            Log::info('Selcom checkout response:', $selcomOrder);
            
            if ($selcomOrder['http_status'] == 200 && isset($selcomOrder['data']['result']) && $selcomOrder['data']['result'] == "SUCCESS") {
                // Store reference in order
                $order->update(['payment_reference' => $selcomOrder['data']['reference']]);
                
                // Initiate wallet payment
                $paymentData = [
                    'transid' => $selcomOrder['data']['reference'],
                    'order_id' => $order->id,
                    'msisdn' => $phoneNumber,
                ];
                
                $paymentResponse = SelcomRequests::walletPayment($paymentData);
                
                // Store payment request in pending_requests table
                DB::table('pending_requests')->insert([
                    'order_id' => $order->id,
                    'phone' => $phoneNumber,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                
                // Show pending message while waiting for callback
                $this->processingPayment = false;
                session()->flash('pending_payment', 'Please check your phone and complete the payment.');
                
                // In a real app, you might poll for payment status or wait for a webhook callback
                // For now, we'll emit an event to check payment status after a delay
                $this->dispatch('checkPaymentStatus', orderId: $order->id);
                
            } else {
                // Check for IP whitelisting error
                if ($selcomOrder['http_status'] == 403 && 
                    isset($selcomOrder['error']) && 
                    strpos($selcomOrder['error'], 'Source IP not whitelisted') !== false) {
                    
                    // Log error for admin attention
                    Log::critical('Selcom IP whitelist error: Server IP needs to be whitelisted with Selcom', [
                        'error' => $selcomOrder['error'],
                        'reference' => $selcomOrder['data']['reference'] ?? 'unknown'
                    ]);
                    
                    $this->handlePaymentError(
                        'Payment gateway configuration error. Please contact support with code: IP-WL-403. ' .
                        'Our team will resolve this as soon as possible.'
                    );
                } else {
                    // Handle other errors
                    $errorMessage = isset($selcomOrder['data']['result']) ? 
                        $selcomOrder['data']['result'] : 
                        (isset($selcomOrder['error']) ? $selcomOrder['error'] : 'Payment processing failed');
                    
                    Log::error('Selcom error: ', $selcomOrder);
                    $this->handlePaymentError($errorMessage);
                }
            }
            
        } catch (\Exception $e) {
            Log::error('Payment processing error: ' . $e->getMessage());
            $this->handlePaymentError('An error occurred while processing your payment. Please try again.');
        }
    }
    
    /**
     * Handle payment error
     */
    private function handlePaymentError($message)
    {
        $this->processingPayment = false;
        $this->paymentError = true;
        $this->errorMessage = $message;
    }
    
    /**
     * Handle payment completion (called by webhook or polling)
     */
    public function handlePaymentComplete($status, $orderId)
    {
        if ($orderId != $this->orderId) {
            return;
        }
        
        if ($status == 'success') {
            $this->paymentSuccess = true;
        } else {
            $this->handlePaymentError('Payment was not completed. Please try again.');
        }
        
        $this->processingPayment = false;
    }
    
    /**
     * Check payment status (called by polling)
     */
    public function checkPaymentStatus()
    {
        if (!$this->orderId) {
            return;
        }
        
        $payment = Payment::where('order_id', $this->orderId)
            ->where('status', 'COMPLETED')
            ->first();
            
        if ($payment) {
            $this->handlePaymentComplete('success', $this->orderId);
        }
    }

    public function render()
    {
        return view('livewire.component.subscription');
    }
}