<?php

namespace App\Livewire\Customer;

use App\Models\Order;
use Livewire\Component;

class ViewTransactions extends Component
{
    public function render()
    {

        $customer_order=Order::where('customer_id',session()->get('customer_id'))->get();

        return view('livewire.customer.view-transactions',[
            'customer_order'=>$customer_order,
        ]);
    }
}
