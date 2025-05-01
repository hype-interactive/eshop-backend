<?php

namespace App\Livewire\Component;

use Livewire\Component;

class Subscription extends Component
{

    public $packages;

    public $showPaymentModal=false;

    public $processingPayment=false;

    public $paymentSuccess=false;
    public $paymentError=false;

   // public $selectedPackage;

    public $paymentNetwork=[];
    public $errorMessage;

    public $planId;
    public function mount(){

        $this->packages=[];

      //  $this->selectedPackage=$packages;
    }


    
    public function initiatePayment(){


        $this->validate([
            'paymentPhone' => 'required|regex:/^[0-9]{10,12}$/',
            'paymentNetwork' => 'required|in:vodacom,tigo,halotel,ttcl'
        ], [
            'paymentPhone.required' => 'Please enter your phone number',
            'paymentPhone.regex' => 'Please enter a valid phone number',
            'paymentNetwork.required' => 'Please select a payment network',
            'paymentNetwork.in' => 'Please select a valid payment network'
        ]);

        $this->processingPayment=true;

        
    }


    public function  ChoosePlan($planId){

        $this->showPaymentModal=!$this->showPaymentModal;

        
    }


    public function render()
    {
        return view('livewire.component.subscription');
    }
}
