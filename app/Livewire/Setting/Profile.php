<?php

namespace App\Livewire\Setting;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{

    public $password;
    public $new_password;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $phone_number;

    public function render()
    {
        return view('livewire.setting.profile');
    }


    public function boot(){
        $user=User::where('id',auth()->user()->id)->get();
        foreach($user as $usr ){
            $this->last_name=$usr->last_name;
            $this->middle_name=$usr->middle_name;
            $this->first_name=$usr->first_name;
            $this->phone_number=$usr->phone_number;


        }
    }

    function updatePassword(){


        if(Hash::check($this->password , auth()->user()->password)){
            User::where('id',auth()->user()->id)->update([
            'password'=>$this->new_password,
          ]);
           session()->flash('success','updated successfully');
          sleep(2);
          $this->reset();
        }else{
            session()->flash('error_message','oohps! password do not match');
        }
    }

    function  updateProfile(){

        $this->validate([
        'first_name'=>'required',
        'middle_name'=>'required',
        'phone_number'=>'required',
        'last_name'=>'required',
        ]);

        User::where('id',auth()->user()->id)->update([

            'first_name'=>$this->first_name,
            'middle_name'=>$this->middle_name,
            'last_name'=>$this->last_name,
            'phone_number'=>$this->phone_number
        ]);

        session()->flash('message','successflly updated');

    }
}
