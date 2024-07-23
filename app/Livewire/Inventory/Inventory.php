<?php

namespace App\Livewire\Inventory;

use Livewire\Component;

class Inventory extends Component
{

    public $istable=true;

    public function switchView(){
        $this->istable=!$this->istable;
    }
    public function render()
    {
        return view('livewire.inventory.inventory');
    }
}
