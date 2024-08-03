<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use App\Models\Order;
use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {

        $orders= Order::paginate(10);
        foreach($orders as $order){
            $order['customer']= Customer::where('id',$order->customer_id)->value('full_name');

        }



        return view('livewire.dashboard.dashboard',['orders'=>$orders]);
    }
}
