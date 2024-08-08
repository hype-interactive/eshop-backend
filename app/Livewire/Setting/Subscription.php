<?php

namespace App\Livewire\Setting;

use App\Models\Package;
use App\Models\User;
use Livewire\Component;

class Subscription extends Component
{
    public $total_vendor;
    public $pending_vendor;

    public $status;
    public $active_vendor;
    public $package;
    public $packages;
    public $managePackageBool=false;
    public $tab_id=1;

    protected $listeners=['packageList'=>'registerPackage'];
    public function render()
    {
        $this->packages=Package::get();
        //dashboard summary
        $this->packageSummary();

        return view('livewire.setting.subscription');
    }


    function updateStatus(){
        Package::where('id',session('pack_id'))
        ->update(['status'=>$this->status]);
 $this->managePackageBool=false;
    }
    public function packageSummary(){

        $this->total_vendor=User::where('role_id',2)->count();
        $this->active_vendor=User::where('role_id',2)->count();
        $this->pending_vendor=User::where('role_id',2)->count();
        $this->package=Package::count();
    }


    public function registerPackage($id){
    session()->forget('edit_package_id');
    $this->tab_id=$id;
    }

    function editPackage($id){
        session()->put('edit_package_id',$id);
        $this->tab_id=2;

    }

    function disablePackage($id){
        session()->put('pack_id',$id);
       $this->managePackageBool=!$this->managePackageBool;
    }
}
