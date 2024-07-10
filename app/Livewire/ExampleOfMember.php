<?php

namespace App\Livewire;

use App\Models\VotingMember;
use Livewire\Component;

class ExampleOfMember extends Component
{
    public $index = 0;
    public function render()
    {
        return view('livewire.example-of-member', ['members' => 
            VotingMember::select()           
            ->orderBy('votes', 'desc')   
            ->take(3)                          
            ->get(), 'images' => [0], 'indexImg' => 0, 'hideLeftArrow' => 1, 'hideRightArrow' => 0]);
    }
}
