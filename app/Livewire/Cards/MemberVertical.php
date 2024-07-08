<?php

namespace App\Livewire\Cards;

use Livewire\Component;

class MemberVertical extends Component
{
    public $indexImg = 0;
    public $member;
    public $images;    public $hideLeftArrow = false;
    public $hideRightArrow = false;

    public function mount($member)
    {
        $this->member = $member;
        $this->images = array_slice(explode(";", $this->member->images), 0, -1);
        $this->handleArrowVisibility();
    }

    public function handleArrowVisibility()
    {
        $this->hideLeftArrow = $this->indexImg == 0;
        $this->hideRightArrow = $this->indexImg == count($this->images) - 1;
    }

    public function left()
    {
        $imagesCount = count($this->images);
        $this->indexImg = ($imagesCount + ($this->indexImg - 1)) % $imagesCount;
        $this->handleArrowVisibility();
    }

    public function right()
    {
        $imagesCount = count($this->images);
        $this->indexImg = ($this->indexImg + 1) % $imagesCount;
        $this->handleArrowVisibility();
    }
    public function render()
    {
        $this->images = array_slice(explode(";", $this->member->images), 0, -1);
        
        return view('livewire.cards.member-vertical', ['images' => $this->images]);
    }
}
