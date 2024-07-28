<?php

namespace App\Livewire\Inventory;

use App\Models\Inventory;
use App\Models\Product;
use Livewire\WithFileUploads; // Import the trait
use Illuminate\Support\Facades\Storage;

use Livewire\Component;

class AddInventory extends Component
{
    use WithFileUploads;
    public $photo;
    public $image_url;
    public $name;
    public $unit;
    public $vendor_price;
    public $product_category_id;
    public $expire_date;
    public $quantity;
    public $visibility;
    public $featured;

    protected $rules = [
        'name' => 'required|string|max:255',
        'unit' => 'required|string|max:255',
        'vendor_price' => 'required|numeric|min:0',
        'product_category_id' => 'required',
        'expire_date' => 'required|date',
        'quantity' => 'required|numeric|min:0',
        'photo' => 'nullable|image|max:1024', // max 1MB
    ];

    public function save()
    {
        $this->validate();


        try{
        $productData = [
            'name' => $this->name,
            'unit' => $this->unit,
            'vendor_price' => $this->vendor_price,
            'product_category_id' => $this->product_category_id,
            'expire_date' => $this->expire_date,
            'visibility' => $this->visibility ? 1 : 0,
             'vendor_id'=>auth()->user()->id,
            'featured' => $this->featured ? 1 : 0,
        ];


        if ($this->photo) {
            $imagePath = $this->photo->store('photos/product', 'public');
            $productData['image_url'] = Storage::url($imagePath);
        }



        $product = Product::create($productData)->id;

        Inventory::create([
            'quantity' => $this->quantity,
            'product_id' => $product,
        ]);


        session()->flash('message', 'Product successfully registered.');
    }
    catch(\Exception $e){

        session()->flash('message_fail', 'Product successfully registered.'.$e->getMessage());

    }
    }


    function discard(){
        $this->dispatch('closeForm');
    }





    public function render()
    {
        return view('livewire.inventory.add-inventory');
    }
}
