<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = [
        'login', 'voting_member_id'
    ];
    
    public function VotingMember(): BelongsTo
    {
        return $this->belongsTo(VotingMember::class);
    }

}
