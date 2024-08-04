<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use App\Models\Order;
use Livewire\Component;

class ViewTransactions extends Component
{

    public $customers;
    public function render()
    {

        $customer_order=Order::where('customer_id',session()->get('customer_id'))->get();

        $this->customers=Customer::where('id',session()->get('customer_id'))->first();
        return view('livewire.customer.view-transactions',[
            'customer_order'=>$customer_order,
        ]);
    }
}
