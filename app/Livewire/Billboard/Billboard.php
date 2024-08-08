<?php

namespace App\Livewire\Billboard;

use App\Models\Billboard as ModelsBillboard;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class Billboard extends Component
{
    use WithFileUploads;
public $billboard2;
    public $items;
    public $name;
    public $description;
    public $image_url;
    public $visibility;
    public $priview=false;
    public $image;
    public $billboards;
    public $title;
    public $content;
    public $subtitle;
    public $selected_id;
public $status;
    public $enableRegisterModalboolean=false;

    public $delete_modal_boo=false;


    public function disableBillboard($id){
        $this->selected_id=$id;
        $this->delete_modal_boo=!$this->delete_modal_boo;

    }

    function blockBillboard(){
    $this->validate([
        'status'=>'required'
    ]);
        ModelsBillboard::where('id',$this->selected_id)
         ->update(['status'=>$this->status]);

         $this->delete_modal_boo=false;
    }
    function registerModal(){
        $this->enableRegisterModalboolean=true;
    }


    public function delete($id)
    {
        $item = ModelsBillboard::find($id);
        if ($item->image_url && Storage::exists(parse_url($item->image_url, PHP_URL_PATH))) {
            Storage::delete(parse_url($item->image_url, PHP_URL_PATH));
        }
        $item->delete();
        $this->items = ModelsBillboard::all();
    }

    function priviewBillboard($id){

        $this->priview=!$this->priview;
        $item = ModelsBillboard::find($id);
        $this->title = $item->name;
        $this->content = $item->description;
        $this->image = $item->image_url;
        $this->subtitle=$item->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'visibility' => 'required|boolean',
        ]);

        $item = ModelsBillboard::find($this->itemId);

        // Handle image upload
        if ($this->image) {
            // Delete the old image if it exists
            if ($item->image_url && Storage::exists(parse_url($item->image_url, PHP_URL_PATH))) {
                Storage::delete(parse_url($item->image_url, PHP_URL_PATH));
            }

            $imagePath = $this->image->store('images', 'public');
            $this->image_url = Storage::url($imagePath);
        } else {
            // Keep the old image URL if no new image is uploaded
            $this->image_url = $item->image_url;
        }

        $item->update([
            'name' => $this->name,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'visibility' => $this->visibility,
        ]);

        $this->resetFields();
        $this->items = ModelsBillboard::all();
    }


    public function edit($id)
    {
        $item = ModelsBillboard::find($id);
        $this->name = $item->name;
        $this->description = $item->description;
        $this->image_url = $item->image_url;
        $this->visibility = $item->visibility;
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'visibility' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($this->image) {
            $imagePath = $this->image->store('billboard/images', 'public');
            $this->image_url = Storage::url($imagePath);
        }

        ModelsBillboard::create([
            'name' => $this->name,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'visibility' => $this->visibility,
            'status'=>'active'
        ]);

        $this->resetFields();
        $this->items = ModelsBillboard::all();
    }

    public function mount()
    {
        $this->items = ModelsBillboard::all();
    }



    private function resetFields()
    {
        $this->name = '';
        $this->description = '';
        // $this->image = null;
        $this->image_url = '';
        $this->visibility = false;
        // $this->itemId = null;
    }





    public function render()
    {
        $this->billboards=ModelsBillboard::where('status','active')->get();
        $this->billboard2=ModelsBillboard::where('status','!=','active')->get();

        return view('livewire.billboard.billboard');
    }
}
