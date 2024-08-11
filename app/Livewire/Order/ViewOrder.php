<?php

namespace App\Livewire\Order;

use App\Models\Inventory;
use App\Models\InventoryLog;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductTransaction;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ViewOrder extends Component
{
    public $orders;

    public function render()
    {
        $order= Order::where('id',session()->get('order_id'))->first();
        $product_ids= OrderProduct::where('order_id',$order->order_id)->pluck('product_id')->toArray();
        $products=Product::whereIn('id',$product_ids)->paginate(10);


        return view('livewire.order.view-order',[
           'products'=>$products,
            'date'=>$order->created_at,
             'status'=>$order->status,
             'order_id'=>$order->order_id,
             'total'=>$order->total,
             'order'=>$order
        ]);
    }

   public  function cancelOrder($order_id){

        Order::where('order_id',$order_id)->update([ 'status'=>'cancelled']);

        $this->dispatch('closeOrderView');
    }

    function close(){
        $this->dispatch('closeOrderView');

    }


    public function  confirmCashOrders($order_id){

        DB::beginTransaction();
        try{
       $order_data=Order::where('order_id',$order_id)->first();
       $method= $order_data->payment_method;
       $amount= $order_data->total;
       $customer_id=$order_data->customer_id;

        // make payment
       $payment_id=$this->createPayment($method, $amount,$order_id);
       // transaction
       $transaction_id= $this->createTransaction($amount,$order_id,$customer_id, $payment_id);

       foreach(OrderProduct::where('order_id',$order_id)->cursor() as $order_product){
       //\\//\\///\\\///\\\///\\\///\\\//\\
       $product_id=$order_product->product_id;
    //    $products=Product::cursor()
    //                ->filter( function(Product $product,$product_id)
    //                { return $product->id == $product_id; } );

        $products= Product::where('id',$product_id)->firstOr(function(){
                   $status="ERROR";
                    $this->failFunction($status);
                    });

        $vendor_id=$products->vendor_id;
        $amount_per_product=$products->final_price;
        $status="completed";
        $quantity=$order_product->quantity;
        $change_type='sale';
        $reason="order Payment";
        $payment_status="paid";
        $inventory_id=Inventory::where('product_id',$product_id)->first()->id;

        //product_transactions
        $this->createProductTransaction($transaction_id, $product_id, $vendor_id,$amount_per_product,$status);

       // reduce product number
       $this->reduceProductQuantity($product_id,$quantity);
       //inventory logs
       $this->createInventoryLogs($quantity, $change_type ,$reason, $inventory_id);

    }
        // clear order
        $this->updateOrderStatus($order_id, $payment_status);

        DB::commit();
        session()->flash('message_success','Process has completed successfully');


    }catch(\Exception $error){
            DB::rollBack();
            session()->flash('message_fail','something went wrong '.$error->getMessage());

    }

    }


    //update status of order
    function updateOrderStatus($order_id,$payment_status){
      Order::where('order_id',$order_id)->update(['status'=>'completed','payment_status'=>$payment_status]);
    }


    function createPayment($method, $amount,$order_id){
      $id=   Payment::create([
        'method'=>$method,
        'amount'=>$amount,
        'status'=>'completed',
        'date'=>now(),
        'narration'=>'cash payment',
        'order_id'=>$order_id,
        ])->id;

        return $id;
    }
   // for transaction
    function createTransaction ($amount,$order_id,$customer_id, $payment_id){
     $transaction_id= Transaction::create([
       'amount'=>$amount,
        'date'=>now(),
        'order_id'=>$order_id,
        'customer_id'=>$customer_id,
        'payment_id'=>$payment_id,
        'status'=>'completed',

      ])->id;
      return $transaction_id;

    }

    function createProductTransaction($transaction_id,$product_id,$vendor_id,$amount,$status){
      ProductTransaction::create([
       'transaction_id'=>$transaction_id,
        'product_id'=>$product_id,
        'vendor_id'=>$vendor_id,
         'amount'=>$amount,
         'status'=>$status
      ]);
      }


      function reduceProductQuantity($product_id, $quantity){
     $process_status="OK";
        $currentQuantity = Inventory::where('product_id', $product_id)->value('quantity');
        if ($currentQuantity === null) {
            return;
        }
        $newQuantity = $currentQuantity - $quantity;
        if ($newQuantity < 0) {
            $process_status="ERROR";
            return $this->failFanction($process_status);
        }
        Inventory::where('product_id', $product_id)
            ->update([
                'quantity' => $newQuantity
            ]);
          }
          function createInventoryLogs($quantity, $change_type ,$reason, $inventory_id){
            InventoryLog::create([
             'quantity'=>$quantity,
             'change_type'=>$change_type,
              'reason'=>$reason,
              'inventory_id'=>$inventory_id,
            ]);

          }
            // return status
            function failFunction($status){
            // make transaction fail
             return  USERTEST::create('');

            }
}
