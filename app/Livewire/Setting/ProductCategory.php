<?php

namespace App\Livewire\Setting;

use App\Models\ProductCategory as ModelsProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;


class ProductCategory extends Component
{
    use WithFileUploads;
    public $name;
    public $image_url;
    public $description;

    public $categories;
    function register(){
        $this->validate([
       'name'=>'required|unique:product_categories',
       'description'=> 'required',
        'image_url'=>'required'
        ]);

       $image_path= $image_path = $this->image_url->store('productCategory/images', 'public');

        ModelsProductCategory::create([
            'name'=>$this->name,
            'description'=>$this->description,
             'image_url'=>$image_path
        ]);

        session()->flash('message','successfully registered');
    }

    public function edit($id)
    {
        $category = ProductCategory::find($id);

        if ($category) {
            $this->name = $category->name;
            $this->description = $category->description;
            $this->image_url = $category->image_url;
        }
    }

    public function update()
    {
        $this->validate([
            'name'=>'required',
            'description'=> 'required',
             'image_url'=>'required'
             ]);

        $category = ProductCategory::find($this->categoryId);

        if ($category) {
            $image_path = $this->image_url ? $this->image_url->store('images', 'public') : $category->image_url;

            $category->update([
                'name' => $this->name,
                'description' => $this->description,
                'image_url' => $image_path,
            ]);

            session()->flash('message', 'Category successfully updated');

            // Reset fields
            $this->reset();
        }
    }

    // Delete operation
    public function delete($id)
    {
        $category = ProductCategory::find($id);

        if ($category) {

            // add status
            $category->delete();
            session()->flash('message', 'Category successfully deleted');
        }

    }

    public function render()
    {
        $this->categories=\App\Models\ProductCategory::get();
        return view('livewire.setting.product-category');
    }
}
