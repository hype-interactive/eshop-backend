<?php

namespace App\Livewire\Vendor;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class ViewVendor extends Component
{
    use WithFileUploads;


    public $email;
    public $photo;
    public $first_name;
    public $last_name;
    public $middle_name;
    public $phone_number;
    public $vendor_id;
    public $image_url;

    public $products;
    public function render()
    {
        $this->products= Product::where('vendor_id',session()->get('vendor_id'))->get();
        return view('livewire.vendor.view-vendor');
    }

    public function enableEditing(){

        session()->put('enableEditing', '');
    }

    function boot(){
        session()->put('enableEditing','disabled');

        $this->vendor_id=session()->get('vendor_id');

        $vendors= User::where('id',$this->vendor_id)->get();
        foreach($vendors as $vendor){
          $this->first_name=   $vendor->first_name;
          $this->middle_name= $vendor->middle_name;
          $this->last_name= $vendor->last_name;
          $this->photo= $vendor->photo;
          $this->email= $vendor->email;
          $this->phone_number= $vendor->phone_number;

        }

    }

   function  update(){
    $this->validate([
    'first_name'=>'required',
    'middle_name'=>'required',
    'last_name'=>'required',
    'email'=>'required',
    'phone_number'=>'required',

    ]);

    User::where('id',$this->vendor_id)->update([
     'first_name'=>$this->first_name,
     'middle_name'=>$this->middle_name,
     'last_name'=>$this->last_name,
     'phone_number'=>$this->phone_number,
     'email'=>$this->email,
      'photo'=>$this->photo
    ]);

    session()->flash('message','updated successfully ');
   }


}
