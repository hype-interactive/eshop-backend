<?php

namespace App\Livewire\Setting;

use Livewire\Component;

class Setting extends Component
{
    public $tab_id=1;
    public function render()
    {
        return view('livewire.setting.setting');
    }

    public function changeTab($id){
        $this->tab_id=$id;
    }
}
