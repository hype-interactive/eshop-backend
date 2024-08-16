<?php

namespace App\Jobs;

use App\Http\Integration\Beem\BeemSMSController;
use App\Livewire\Main;
use App\Mail\CustomMail;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EndOfDay implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //end of subscriptions
       $this->updateSubscriptions();
       echo "completed first_function ";
       //check product status
       $this->checkProductStatus();
       echo "completed second_function ";
    }

    function updateSubscriptions(){
        $subscriptions=Subscription::where('status','active')->get();
        foreach($subscriptions as $subscription){
          if($subscription->end_date < now()->format('Y-m-d')){
            //update to out of service status
            Subscription::where('id',$subscription->id)->update(['status'=>'out_of_service']);
          }

        }

        //update on renew of services


    }

    function checkProductStatus(){

        //check inventory
        $product_id= Inventory::where('quantity','<=',0)->pluck('product_id')->toArray();
        $products= Product::where('status','in_stock')->whereIn('id',$product_id)->get();
        foreach($products as $value){

            // update status
            $this->updateProductStatus($value->id);

            //send notification for vendor  sms or emails
            $vendor=User::where('id',$value->vendor_id)->first();
            $phone_number=$vendor->phone_number;
            $email=$vendor->email;
            $product_name=$value->name;
            $this->sendNotifications($phone_number, $email,$product_name);
        }
    }


    function updateProductStatus($id){
        Product::where('id',$id)->update(['status'=>'out_of_stock']);
    }

    function sendNotifications($phone_number, $email,$product_name){

        $report_id=time();
        $client_id=$report_id;
        $message="Dear, Your Product: $product_name  is out of stock";
        // try send sms ,
        try{
            BeemSMSController::send($this->formatNumber($phone_number),  $message, $client_id, $report_id );

        }catch(\Exception $error){

        }
        $user= User::where('email',$email)->first();
        $user['sender_name'] =  "eshop ";
        $user['comment']=$message;


        Mail::to($email)->send(new CustomMail($user));



    }

    function formatNumber($phone_number) {
        $phone_number = preg_replace('/\D/', '', $phone_number);

        if (strpos($phone_number, '0') === 0) {
            $phone_number = substr($phone_number, 1);
        }

        if (strpos($phone_number, '255') !== 0) {
            $phone_number = '255' . $phone_number;
        }

        return $phone_number;
    }



}
