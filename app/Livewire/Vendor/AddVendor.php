<?php

namespace App\Livewire\Vendor;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str; // Add this import for password generation
use Illuminate\Support\Facades\Storage;


class AddVendor extends Component
{
    use WithFileUploads;

    public $status;
    public  $image_url;
    public $photo;

    public $role_id;
    public $last_name;
    public $middle_name;
    public $first_name;
    public $email;
    public $phone_number;

    public function render()
    {
        return view('livewire.vendor.add-vendor');
    }

    function closeRegisterForm()
 {
    $this->dispatch('closeRegisterModel');
 }

    public function register(){

        $this->validate([
      'status'=>'required',
        'last_name'=>'required',
        'middle_name'=>'required',
        'first_name'=>'required',
        'email'=>'required|unique:users',
         'phone_number'=>'required',
        ]);

        //generate passowrd
        $password=Str::random(9);

         //image process here
         if ($this->photo) {
            $imagePath = $this->photo->store('photos/product', 'public');
            $image_url= Storage::url($imagePath);
        }

         $user=   User::create([
            'status' => $this->status,
            'role_id' => 2,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'password'=>$password,
            'phone_number' => $this->phone_number,
            'image_url'=>$image_url
        ]);





        //send to user of the system
       // mail::to($this->email)->send($password);


        session()->flash('message','has been registered successfully ');

    }


}
