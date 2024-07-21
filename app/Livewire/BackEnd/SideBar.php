<?php

namespace App\Livewire\BackEnd;

use Livewire\Component;

class SideBar extends Component
{
    public $menu_id=1;

    function selectedMenu ($id){

        $this->menu_id=$id;
        $this->dispatch('menuChanged',$id);
    }

    public function render()
    {
        return view('livewire.back-end.side-bar');
    }
}
