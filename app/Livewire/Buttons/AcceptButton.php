<?php

namespace App\Livewire\Buttons;

use Livewire\Component;

class AcceptButton extends Component
{

    public function vote()
    {
        dd(1);

    }

    public function render()
    {
        return view('livewire.buttons.accept-button');
    }
}
