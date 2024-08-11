<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use App\Models\Order;
use Livewire\Component;

class ViewTransactions extends Component
{

    public $customers;

    public $amount;
    public $start_date;
    public $end_date;

    public $filter=false;

    function viewCustomerOrders($id){
        $this->dispatch('viewCustomerOrderList',$id);
    }

    function search(){
        $orders=Order::query();
        if($this->amount){
            $orders=$orders->where('total',$this->amount);
        }
        if($this->start_date){
           $orders= $orders->whereDate('created_at','>=',$this->start_date);
        }
        if($this->end_date){
            $orders= $orders->whereDate('created_at','<=',$this->start_date);
        }

        return $orders;


    }
    public function render()
    {

        $customer_order=$this->search()->where('customer_id',session()->get('customer_id'))->get();

        $this->customers=Customer::where('id',session()->get('customer_id'))->first();
        return view('livewire.customer.view-transactions',[
            'customer_order'=>$customer_order,
        ]);
    }
}
