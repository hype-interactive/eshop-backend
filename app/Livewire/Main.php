<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $side_bar_id=1;

    protected $listeners=['menuChanged'=>'menuChanged'];

    function menuChanged($id){
       $this->side_bar_id=$id;
    }
    public function render()
    {
        return view('livewire.main');
    }
}
