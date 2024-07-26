<?php

namespace App\Livewire\Vendor;

use App\Models\User;
use Livewire\Component;

class Vendor extends Component
{
    public $users;

    public $enable_vendor_registration=false;

    function registerVendor(){
        $this->enable_vendor_registration=!$this->enable_vendor_registration;
    }
    public function render()
    {
        $this->users= User::where('role_id',2)->get();

        return view('livewire.vendor.vendor');
    }
}
