<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Order;

class VendorDashboard extends Component
{
    public function render()
    {

        $orders= Order::paginate(10);
        foreach($orders as $order){
            $order['customer']= Customer::where('id',$order->customer_id)->value('full_name');

        }

        return view('livewire.dashboard.vendor-dashboard',['orders'=>$orders]);
    }
}
