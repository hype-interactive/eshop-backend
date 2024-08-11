<?php

namespace App\Livewire\Transaction;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction as ModelsTransaction;
use App\Models\User;
use Livewire\Component;

class Transaction extends Component
{
    public $amount;
    public $start_date;
    public $end_date;

    public $customer_id;
    public function render()
    {
        $transactions=$this->search()->get();
        foreach($transactions as $data){
            $data['customer']=Customer::where('id',$data->customer_id)->value('full_name');
            $user=User::where('id',$data->vendor_id)->firstOr( function(){ return (object)[ 'first_name'=>'N/A', 'middle_name'=>'N/A','last_name'=>'N/A'];});
            $data['vendor_name']=$user->first_name.' '.$user->middle_name.' '.$user->last_name; //,'middle_name','last_name'
            $data['product_name']=Product::where('id',$data->product_id)->value('name');
        }

        return view('livewire.transaction.transaction',['transactions'=>$transactions]);
    }


    function search(){
        $orders=ModelsTransaction::query();
        if($this->amount){
            $orders=$orders->where('amount',$this->amount);
        }
        if($this->start_date){
           $orders= $orders->whereDate('created_at','>=',$this->start_date);
        }
        if($this->end_date){
            $orders= $orders->whereDate('created_at','<=',$this->start_date);
        }
        if($this->customer_id){
            $orders=$orders->where('customer_id',$this->customer_id);
        }

        return $orders;


    }

}
