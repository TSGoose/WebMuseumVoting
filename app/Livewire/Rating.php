<?php

namespace App\Livewire;

use App\Models\VotingMember;
use Livewire\Component;

class Rating extends Component
{
    public $index = 1;

    public function render()
    {
        $sumVotes = VotingMember::sum('votes');

        if ($sumVotes == 0) $sumVotes ++;
        return view('livewire.rating', ['members' => 
        VotingMember::select()           
        ->orderBy('votes', 'desc')   
        ->take(5)                          
        ->get(), 'sumVotes' => $sumVotes]);
    }
}
