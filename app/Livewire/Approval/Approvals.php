<?php

namespace App\Livewire\Approval;

use App\Models\Approval;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Approvals extends Component
{
    public $approvals;
    public $approval_id;
    public $approval_modal_bool=false;

     public function approvalModalAction($id){
        $this->approval_modal_bool=!$this->approval_modal_bool;
        $this->approval_id=$id;
    }

    public function render()
    {
        $this->approvals=Approval::get();
        return view('livewire.approval.approvals');
    }


public function update()
{
    try {

        $approvals= Approval::find($this->approval_id);

         Product::findOrFail($approvals->row_id);
         $edit_package= json_decode($approvals->edit_package);
         DB::table($approvals->table_name)->where('id',$approvals->row_id)->update($edit_package);
         Approval::where('id',$this->approval_id)->update(['status'=>'approved',    'approved_by'=>auth()->user()->id
        ]);

        session()->flash('message', 'processes is completed ');
    } catch (\Exception $e) {
        session()->flash('message_fail', 'process is Failed  ' . $e->getMessage());
    }
}


}
