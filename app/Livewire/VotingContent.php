<?php

namespace App\Livewire;

use App\Models\VotingMember;
use Livewire\Component;

class VotingContent extends Component
{
    public $index = 0;
    public function render()
    {
        return view('livewire.voting-content', ['members' => VotingMember::all(), 'images' => [0], 'indexImg' => 0, 'hideLeftArrow' => 1, 'hideRightArrow' => 0]);
    }
}
