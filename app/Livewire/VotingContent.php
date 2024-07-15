<?php

namespace App\Livewire;

use App\Models\Vote;
use App\Models\VotingMember;
use Livewire\Component;

class VotingContent extends Component
{
    public $index = 0;
    public $members;

    public function vote()
    {
        dd(1);
        foreach ($this->members as $member){
            if ($this->only('cb_member-{{ $member->id }}') == true)
                Vote::create(['login', $member->id]);
        }
    }

    public function render()
    {
        $this->members = VotingMember::all();
        return view('livewire.voting-content', ['members' => $this->members, 'images' => [0], 'indexImg' => 0, 'hideLeftArrow' => 1, 'hideRightArrow' => 0]);
    }
}
