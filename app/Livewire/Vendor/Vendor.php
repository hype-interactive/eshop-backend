<?php

namespace App\Livewire\Vendor;

use App\Models\User;
use Livewire\Component;

class Vendor extends Component
{
    public $users;

    public $viewPage=1;
    public $deleteModal=false;

    protected $listeners=['closeRegisterModel'=>'registerVendor','closeEditForm'=>'closeEditForm'];

    public $enable_vendor_registration=false;

   function closeEditForm(){
    $this->viewPage=1;
   }
    function registerVendor(){
        $this->enable_vendor_registration=!$this->enable_vendor_registration;
    }
    public function render()
    {
        $this->users= User::where('role_id',2)->get();
        return view('livewire.vendor.vendor');
    }


    function editVendor($id){
         session()->put('vendor_id',$id);
         $this->enable_vendor_registration=false;
        $this->viewPage=3;
    }

    function viewVendor($id){
        session()->put('vendor_id',$id);
      $this->viewPage=2;
    }



   public  function deleteModal($id){
        session()->put('vendor_id',$id);
        $this->deleteModal=true;
    }

    public function delete()
    {
        $user = User::findOrFail(session()->get('vendor_id'));
        $user->update([
            'status'=>'blocked'
        ]);

        session()->flash('message', 'User successfully deleted.');
    }

}
