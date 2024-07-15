<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public function vote()
    {
        dd(1);
        
    }

    public function render()
    {
        return view('livewire.main');
    }
}
