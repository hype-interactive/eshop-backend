<?php

namespace App\Livewire\Vendor;

use App\Mail\GetPassword;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str; // Add this import for password generation
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


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
    $this->dispatch('closeRegisterModel',1);
 }

    public function register(){

        $this->validate([
      'status'=>'required',
        'last_name'=>'required',
        'middle_name'=>'required',
        'first_name'=>'required',
        'email'=>'required|unique:users',
         'phone_number'=>'required',
         'photo'=>'required',
        ]);

        DB::beginTransaction();

        try{


        //generate passowrd

        $password = Str::random(8);
        $hashedPassword = Hash::make($password);

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
            'password'=>$hashedPassword,
            'phone_number' => $this->phone_number,
            'image_url'=>$image_url
        ]);

        $user['password2']=$password;

        Mail::to($this->email)->send( new  GetPassword($user));



        //send to user of the system
       // mail::to($this->email)->send($password);

    DB::commit();
        session()->flash('message','has been registered successfully ');
        $this->reset();

        $this->closeRegisterForm();
    }
    catch(\Exception $e){

        DB::rollBack();
        session()->flash('message_fail','process fail '.$e->getMessage());

    }
    }


}
