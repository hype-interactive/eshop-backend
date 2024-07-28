<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class CustomerTable extends Component
{

    public $customers;


    public function viewCustomerTransactions($id){
         session()->put('customer_id',$id);
        $this->dispatch('customerId',2);
    }
    public function render()
    {
        $this->customers= Customer::get();

        return view('livewire.customer.customer-table');
    }
}
