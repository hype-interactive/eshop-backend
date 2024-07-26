<?php

namespace App\Livewire\Inventory;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;


class Inventory extends Component
{

    public $istable=true;

    public $total_product;
    public $total_category;

    protected $listeners=['closeForm'=>'closeForm'];

    function closeForm(){
        $this->istable=!$this->istable;

    }

    public function switchView(){
        $this->istable=!$this->istable;
    }
    public function render()
    {
        $this->total_product=Product::count();
        $this->total_category= ProductCategory::count();
        return view('livewire.inventory.inventory');
    }
}
