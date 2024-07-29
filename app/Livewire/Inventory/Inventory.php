<?php

namespace App\Livewire\Inventory;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;


class Inventory extends Component
{

    public $istable=true;
    public $sub_page=1;
    public $products;

    public $total_product;
    public $total_category;
    public $delete_modal_boo=false;
    public $selected_product_id;
    public $vendor_price;
     public $final_price;
     public $enable_edit_final_price_modal=false;
     public $product_id;

    protected $listeners=['closeForm'=>'closeForm'];

    function closeForm(){
        $this->sub_page=1;

    }

    public function  changeSubPage($id){

        $this->sub_page= $id;
    }

    function editActionModal($id){
        $this->delete_modal_boo=!$this->delete_modal_boo;;

        $this->selected_product_id=$id;
    }

    public function switchView(){
        $this->istable=!$this->istable;
    }

    function enableEditPage($id){
        session()->put('product_id',$id);
        $this->sub_page=3;
    }

public function delete()
{


    try {
        $id= $this->selected_product_id;

        $product = Product::findOrFail($id);

        $product->where('id', $id)->update([
            'status'=>'out_of_stock'
        ]);

        session()->flash('message', 'Product successfully deleted.');
    } catch (\Exception $e) {
        session()->flash('message_fail', 'Failed to delete product. ' . $e->getMessage());
    }
}


    public function render()
    {
        $this->vendor_price= Product::where('id',$this->product_id)->value('vendor_price') ? : 0;


        $vendor_id=auth()->user()->id;
        $this->total_product=Product::where('vendor_id',$vendor_id)->count();
        $this->total_category= ProductCategory::count();

        $this->products=Product::where('vendor_id',$vendor_id)->get();

        return view('livewire.inventory.inventory');
    }




public function setFinalPrice()
{



    $this->validate([
        'final_price' => 'required|numeric|min:' . $this->vendor_price,
    ]);

    Product::where('id',$this->product_id)->update([
   'final_price'=>$this->final_price,
    ]);

    session()->flash('message', 'Final price updated successfully.');

}



function editFinalPriceModal($id){


    $this->product_id=$id;
    $this->enable_edit_final_price_modal=!$this->enable_edit_final_price_modal;

}



}
