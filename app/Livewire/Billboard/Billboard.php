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

    public $items;
    public $name;
    public $description;
    public $image_url;
    public $visibility;

    public $image;
    public $billboards;

    public $enableRegisterModalboolean=false;


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
            $imagePath = $this->image->store('images', 'public');
            $this->image_url = Storage::url($imagePath);
        }

        ModelsBillboard::create([
            'name' => $this->name,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'visibility' => $this->visibility,
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
        $this->billboards=ModelsBillboard::get();
        return view('livewire.billboard.billboard');
    }
}
