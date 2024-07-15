<?php

namespace App\Livewire;

use App\Models\Vote;
use App\Models\VotingMember;
use Livewire\Component;

class VotingContent extends Component
{
    public $index = 0;
    public $members;
    protected $listeners = ['setSelected'];
    public $selected = [];

    public function vote()
    {
        //dd($this->selected);
        foreach ($this->selected as $id){
            Vote::create(['login' => 'login', 'voting_member_id' => strval($id)]);
            $vm = VotingMember::find($id);
            $vm->votes ++;
            $vm->save();
        }

        return redirect('/voting');

    }

    public function setSelected($id){
        if (in_array($id, $this->selected))
            unset($this->selected[array_search($id, $this->selected)]);
        else
            array_push($this->selected, $id);
    }

    public function render()
    {
        $this->members = VotingMember::all();
        return view('livewire.voting-content', ['members' => $this->members, 'images' => [0], 'indexImg' => 0, 'hideLeftArrow' => 1, 'hideRightArrow' => 0]);
    }
}
