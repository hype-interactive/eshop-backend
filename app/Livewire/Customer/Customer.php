<?php

namespace App\Livewire\Customer;

use App\Models\Customer as ModelsCustomer;
use Livewire\Component;

class Customer extends Component
{
    public $total_customers;

    public $total_ative_customers;

    public $page_id=1;

    protected $listeners=['customerId'=>'viewTransaction'];


    function viewTransaction($id){

    $this->page_id=$id;

    }

    public function render()
{

    $this->total_customers=ModelsCustomer::count();
    $this->total_ative_customers=ModelsCustomer::count();

        return view('livewire.customer.customer');
    }
}
