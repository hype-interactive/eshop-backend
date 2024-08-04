<?php

namespace App\Livewire\Approval;

use App\Models\Approval;
use Livewire\Component;

class Approvals extends Component
{
    public $approvals;
    public $approval_modal_bool=false;

     function approvalModalAction($id){

        dd($id);
        $this->approval_modal_bool=!$this->approval_modal_bool;
    }

    public function render()
    {
        $this->approvals=Approval::get();
        return view('livewire.approval.approvals');
    }
}
