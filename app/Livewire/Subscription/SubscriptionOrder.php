<?php

namespace App\Livewire\Subscription;

use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Livewire\Component;

class SubscriptionOrder extends Component
{

    public $status;
    public $vendor_name;


    function search($querry){

        return $querry->where('status',$this->status);

    }
    public function render()
    {
        //vendor name
        $vendor_name= User::find(session('user_id'));
        $this->vendor_name= $vendor_name->first_name.' '.$vendor_name->middle_name.' '.$vendor_name->last_name;
        $query=Subscription::where('user_id',session('user_id'));
        if($this->status){
            $this->search($query);
        }
        $subsriptions= $query->paginate(10);
        foreach($subsriptions as $data){
            $data['price']=Package::where('id',$data->plan_id)->value('price');

        }

        return view('livewire.subscription.subscription-order',['subsriptions'=>$subsriptions]);
    }
}
