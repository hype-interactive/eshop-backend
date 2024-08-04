<?php

namespace App\Livewire\Vendor;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Vendor extends Component
{
    public $users;

    public $viewPage=1;
    public $delete_modal_boo=false;
    public $total_vendor;
    public $active_vendor;
    public $total_onsale_product;
    public $total_product;

    protected $listeners=['closeRegisterModel'=>'registerVendor','closeEditVendorPage'=>'changeSubPage','vendorList'=>'vendorList'];

    public $enable_vendor_registration=false;

   function closeEditForm(){

    $this->viewPage=1;
    $this->registerVendor();

   }

   function vendorDastboardData(){
    $this->total_vendor=User::where('role_id',2)->count();
    $this->active_vendor=User::where('role_id',2)->where('status','active')->count();
     $this->total_product= Product::count();
     $this->total_onsale_product=Product::where('status','Product List')->count();
   }

   function boot(){
    $this->vendorDastboardData();
   }

   function vendorList(){
    $this->viewPage=1;
   }

    function registerVendor(){
     $this->viewPage=1;

    }
    public function render()
    {
        $this->users= User::where('role_id',2)->get();
        return view('livewire.vendor.vendor');
    }

    function changeSubPage($id){


        $this->viewPage=$id;


    }


    function editVendor($id){
         session()->put('vendor_id',$id);
         $this->enable_vendor_registration=false;
        $this->viewPage=4;
    }

    function viewVendor($id){
        session()->put('vendor_id',$id);
      $this->viewPage=2;
    }



     function deleteActionModal($id){

        session()->put('vendor_id',$id);
        $this->delete_modal_boo=true;
    }

    public function delete()
    {
        $user = User::findOrFail(session()->get('vendor_id'));
        $user->update([
            'status'=>'blocked'
        ]);

        session()->flash('message', 'User successfully deleted.');

        sleep(2);
        $this->delete_modal_boo=false;
    }

}
