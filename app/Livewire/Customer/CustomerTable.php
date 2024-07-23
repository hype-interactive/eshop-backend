<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class CustomerTable extends Component
{

    public $customers;

    public function render()
    {
        $this->customers= Customer::get();

        return view('livewire.customer.customer-table');
    }
}
