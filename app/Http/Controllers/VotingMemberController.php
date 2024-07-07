<?php

namespace App\Http\Controllers;

use App\Models\VotingMember;
use Illuminate\Http\Request;

class VotingMemberController extends Controller
{
    public function getAll()
    {
        $members = VotingMember::all();
        return $members;
    }
}
