<?php

namespace App\Livewire\Approval;

use Livewire\Component;
use App\Models\Approval;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ApprovalList extends Component
{

    public $approvals;
    public $approval_id;
    public $edit_package;
    public $actual_package;
    public $approval_modal_bool=false;



public  function decline($id){

    Approval::where('id',$id)->update([
   'status'=>'declined',
    'approved_by'=>auth()->user()->id
    ]);

    session()->flash('message', 'processes is completed ');

}


public function update()
{

    try {

        $approvals= Approval::find($this->approval_id);

         Product::findOrFail($approvals->row_id);
         $edit_package= json_decode($approvals->edit_package,true);

         DB::table($approvals->table_name)->where('id',$approvals->row_id)->update($edit_package);
         Approval::where('id',$this->approval_id)->update(['status'=>'approved',    'approved_by'=>auth()->user()->id
        ]);

        session()->flash('message', 'processes is completed ');
        $this->approval_modal_bool=false;
    } catch (\Exception $e) {
        session()->flash('message_fail', 'process is Failed  ' . $e->getMessage());
    }
}


public function approvalModalAction($id){

    $this->approval_modal_bool=!$this->approval_modal_bool;

    $this->approval_id=$id;
    $approvals = Approval::find($this->approval_id);

    $this->edit_package=json_decode($approvals->edit_package);
    $this->actual_package= DB::table($approvals->table_name)->where('id',$approvals->row_id)->get();

}



    public function render()
    {
        $this->approvals=Approval::get();

        return view('livewire.approval.approval-list');
    }
}
