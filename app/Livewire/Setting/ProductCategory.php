<?php

namespace App\Livewire\Setting;

use App\Models\ProductCategory as ModelsProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class ProductCategory extends Component
{
    use WithFileUploads;
    public $name;
    public $image_url;
    public $description;
    public $photo;

    public $edit_modal_boolean=false;

    public $categories;
    public $delete_modal_boo=false;

    function editModalAction($id){
        $this->edit_modal_boolean= !$this->edit_modal_boolean;
        session()->put('product_category_id',$id);
        $this->edit($id);
    }
    function register(){
        $this->validate([
       'name'=>'required|unique:product_categories',
       'description'=> 'required',
        'photo'=>'required'
        ]);

       if ($this->photo) {
        $imagePath = $this->photo->store('productCategory/images', 'public');
        $image_path = Storage::url($imagePath);
    }

        ModelsProductCategory::create([
            'name'=>$this->name,
            'description'=>$this->description,
             'image_url'=>$image_path
        ]);

        session()->flash('message','successfully registered');
        $this->reset();

    }



    public function edit($id)
    {
        $category = ModelsProductCategory::find($id);
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
           //  'photo'=>'required'
             ]);

             $id=session('product_category_id');
        $category = ModelsProductCategory::find($id);

        if ($category) {

            if ($this->photo) {
                $imagePath = $this->photo->store('productCategory/images', 'public');
                $this->image_url= Storage::url($imagePath);
            }

        //    $image_path = $this->image_url ? $this->image_url->store('images', 'public') : $category->image_url;

            $category->update([
                'name' => $this->name,
                'description' => $this->description,
                'image_url' => $this->image_url,
            ]);

            session()->flash('message', 'Category successfully updated');

            // Reset fields
            $this->reset();
        }
    }

    // Delete operation

    function deleteModal($id){
        session()->put('delete_id',$id);
        $this->delete_modal_boo=!$this->delete_modal_boo;
    }
    public function delete()
    {
        $id=session('delete_id');
        $category = ModelsProductCategory::find($id);

        if ($category) {

            // add status
            $category->update(['status'=>'pending']);
            session()->flash('message', 'Category successfully deleted');
        }

    }

    public function render()
    {
        $this->categories=\App\Models\ProductCategory::get();
        return view('livewire.setting.product-category');
    }
}
