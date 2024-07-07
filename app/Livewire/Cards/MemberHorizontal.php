<?php

namespace App\Livewire\Cards;

use Livewire\Component;

class MemberHorizontal extends Component
{
    public $indexImg = 0;
    public $member;
    public $images;
    public function left()
    {
        $this->indexImg = (count($this->images) + ($this->indexImg - 1)) % count($this->images);
    }

    public function right()
    {
        $this->indexImg = ($this->indexImg + 1) % count($this->images);
    }

    public function render()
    {   

        $this->images = array_slice(explode(";", $this->member->images), 0, -1);
        
        return view('livewire.cards.member-horizontal', ['images' => $this->images]);
    }
}
