<?php

namespace App\Livewire\Cards;

use Livewire\Component;

class MemberVertical extends Component
{
    public int $indexImg = 0;

    public function left()
    {
        $this->indexImg --;
    }

    public function right()
    {
        dd($this->member);
        $this->indexImg = $this->indexImg;
    }

    public function render()
    {
        return view('livewire.cards.member-vertical');
    }
}
