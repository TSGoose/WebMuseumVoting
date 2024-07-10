<?php

namespace App\Livewire\Cards;

namespace App\Livewire\Cards;

use Livewire\Component;

class MemberHorizontal extends Component
{
    public $indexImg = 0;
    public $member;
    public $images = [];
    public $hideLeftArrow = false;
    public $hideRightArrow = false;
    public $selected = false;

    public function clickImg(){
        echo '<div class = "fixed left-0 top-0 w-full h-full z-[100]"><livewire:big-picture/></div>';
    }

    public function clickSelect(){
        $this->selected = abs($this->selected - 1);
    }

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
        if (!$this->hideLeftArrow){
            $imagesCount = count($this->images);
            $this->indexImg --;
            $this->handleArrowVisibility();
        }
    }

    public function right()
    {
        if (!$this->hideRightArrow){
            $imagesCount = count($this->images);
            $this->indexImg ++;
            $this->handleArrowVisibility();
        }
    }

    public function render()
    {
        $this->images = array_slice(explode(";", $this->member->images), 0, -1);
        return view('livewire.cards.member-horizontal', [
            'images' => $this->images
        ]);
    }
}
