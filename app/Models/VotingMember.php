<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VotingMember extends Model
{
    use HasFactory;

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    protected $fillable = [
        'title', 'description', 'author', 'images', 'music', 'votes'
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
