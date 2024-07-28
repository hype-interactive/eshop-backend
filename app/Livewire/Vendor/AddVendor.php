<?php

namespace App\Livewire\Vendor;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str; // Add this import for password generation


class AddVendor extends Component
{
    use WithFileUploads;

    public $photo;
    public  $image_url;
    public $status;
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
        'role_id'=>'required',
        'last_name'=>'required',
        'middle_name'=>'required',
        'first_name'=>'required',
        'email'=>'required|unique:users',
         'phone_number'=>'required',
        ]);

        //generate passowrd
        $password=Str::random(9);

         //image process here

        User::create([
            'status' => $this->status,
            'role_id' => $this->role_id,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'password'=>$password,
            'phone_number' => $this->phone_number,
        ]);

        //send to user of the system
       // mail::to($this->email)->send($password);


        session()->flash('message','has been registered successfully ');

    }
}
