<?php

namespace App\Livewire\Setting;

use App\Models\Package;
use App\Models\PackageHasService;
use App\Models\Services;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SubscriptionList extends Component
{
    public $services;

    public $package;
     public $status;
     public $name;

    public $description;
    public $registerServiceBool=false;
  public $price;
    public $selectedService=[];

    function  registerServiceModal(){

        $this->registerServiceBool=!$this->registerServiceBool;
    }

    function boot(){

        $package=Package::where('id',session('edit_package_id'))->first();
        if($package){
            $this->name=$package->name;
            $this->description=$package->description;
            $this->price=$package->price;

            $this->selectedService=PackageHasService::where('package_id',$package->id)->pluck('service_id')->toArray();


        }

    }


    public function render()
    {

        $this->services=Services::get();
        return view('livewire.setting.subscription-list');
    }

    public function register(){

        $this->validate([
      'name'=>'required',
      'description'=>'required',

        ]);


        // insert to service table
        Services::create([
        'name'=>$this->name,
        'status'=>$this->status ?: 'pending',
        'description'=>$this->description,
        ]);


        $this->reset();
    }


    public function registerPackageAndService(){

        $this->validate([
            'description' => 'required|string',
            'name' => 'required|string|unique:roles',
            'selectedService' => 'required|array',
            'price'=>'required',
        ]);

        try{

            DB::beginTransaction();

            if(session('edit_package_id')){

                 Package::where('id',session('edit_package_id'))->update([
                    'name' => $this->name,
                    'description' => $this->description,
                    'price'=>$this->price,
                ]);

                //from given id create
                PackageHasService::where('package_id',session('edit_package_id'))->delete();

                foreach ($this->selectedService as $service_id) {

                    PackageHasService::create([
                        'package_id' => session('edit_package_id'),
                        'service_id' => $service_id
                    ]);
                }


            }else{



            $id = Package::create([
                'name' => $this->name,
                'description' => $this->description,
                'price'=>$this->price,
            ])->id;

            //from given id create

            foreach ($this->selectedService as $service_id) {
                PackageHasService::create([
                    'package_id' => $id,
                    'service_id' => $service_id
                ]);
            }
        }

            DB::commit();
         session()->flash('success_message','new package is successfully created');

         $this->reset();

            $this->dispatch('packageList',1);


        }catch(\Exception $e){

     DB::rollBack();
     return $e->getMessage();
        }


    }
}
