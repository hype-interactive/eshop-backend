<?php

namespace App\Livewire\Inventory;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads; // Import the trait
use Illuminate\Support\Facades\Storage;

class EditInventory extends Component
{
    public $editProductId;

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
       // 'photo' => 'required|image|max:1024', // max 1MB
    ];


public function boot()
{
    $product = Product::findOrFail(session()->get('product_id'));

    $this->name = $product->name;
    $this->unit = $product->unit;
    $this->vendor_price = $product->vendor_price;
    $this->product_category_id = $product->product_category_id;
    $this->expire_date = $product->expire_date;

    $this->visibility = $product->visibility;
    $this->featured = $product->featured;
    $this->image_url = $product->image_url;
    $this->editProductId = $product->id;
    $this->visibility = $product->visibility;


  //  $this->quantity = $product->quantity;
  $this->quantity = DB::table('inventories')->where('product_id',$product->id)->value('quantity');
}

public function update()
{
    $this->validate();

    try {
        $product = Product::findOrFail($this->editProductId);

        $productData = [
            'name' => $this->name,
            'unit' => $this->unit,
            'vendor_price' => $this->vendor_price,
            'product_category_id' => $this->product_category_id,
            'expire_date' => $this->expire_date,
            'visibility' => $this->visibility ? 1 : 0,
            'featured' => $this->featured ? 1 : 0,
        ];

        if ($this->photo) {
            // Delete old image file if it exists
            if ($product->image_url) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $product->image_url));
            }
            $imagePath = $this->photo->store('photos/product', 'public');
            $productData['image_url'] = Storage::url($imagePath);
        }

        $product->update($productData);

        // Update the associated inventory
        Inventory::updateOrCreate(
            ['product_id' => $this->editProductId],
            ['quantity' => $this->quantity]
        );

        session()->flash('message', 'Product successfully updated.');
    } catch (\Exception $e) {
        session()->flash('message_fail', 'Failed to update product. ' . $e->getMessage());
    }
}

function discard(){

    $this->dispatch('closeForm');
}


    public function render()
    {
        return view('livewire.inventory.edit-inventory');
    }
}
