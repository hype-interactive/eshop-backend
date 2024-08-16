<?php

namespace App\Livewire\Subscription;

use App\Jobs\EndOfDay;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SubscriptionList extends Component
{
    public $subcribers;
    public $active_subscribers;
    public $out_of_service_subscribers;
    public $sub_menu_id = 1;
    public $pending_subscribers;

    function changeSubMenuId($id)
    {
        EndOfDay::dispatch();


        $this->sub_menu_id = 2;
        session()->put('user_id', $id);
    }
    public function render()
    {

        //total active
        $this->active_subscribers = Subscription::where('status', 'active')->count();

        // out of services
        $this->out_of_service_subscribers = Subscription::where('status', 'out_of_service')->count();

        //pending subsriptions
        $this->pending_subscribers = Subscription::where('status', 'pending')->count();


        $user_id = Subscription::distinct('user_id')->pluck('user_id')->toArray();
        $vendors = User::whereIn('id', $user_id)->paginate(10);
        foreach ($vendors as $vendor) {

            foreach ($this->subscriptionStatus($vendor->id) as $data) {
                $querry = Subscription::find($data->id);
                $vendor['end_date'] = $querry->end_date ?: null;
                $vendor['status'] = $querry->status ?: null;
                $vendor['plan_amount'] = Package::where('id', $querry->id)->value('price');
                $vendor['subscription_id'] = $querry->id;
            }

            // select the latest only if the last one is expired
        }
        return view('livewire.subscription.subscription-list', ['vendors' => $vendors]);
    }

    public function subscriptionStatus($id)
    {
        $query = Subscription::query()->where('user_id', $id);
        $max_id  = $query->max('id');
        return $query->where('id', $max_id)->get();
    }



    public function confirmPayment($id)
    {
        // subascription id

        DB::transaction(function () use ($id) {
            Subscription::where('id', $id)->update([

                'start_date' => now()->format('Y-m-d'),
                'end_date' => now()->addMonth(),
                'status' => 'active',
            ]);

            $data = Subscription::find($id);
            // update status
            User::where('id',$data->user_id)->update(['status'=>'active']);

            $amount = Package::where('id', $data->plan_id)->value('price');

            //payment
            $payment_id = Payment::create([
                'status' => 'completed',
                'amount' => $amount,
                'date' => now(),
                'narration' => "subscription payment through cash ",
                'method' => 'cash',

            ])->id;

            //transaction
            Transaction::create([
                "amount" => $amount,
                "date" => now(),
                "customer_id" => $data->user_id,
                "payment_id" =>  $payment_id ,
                "status" => "completed",
            ]);
            // success messages


        });
    }
}
