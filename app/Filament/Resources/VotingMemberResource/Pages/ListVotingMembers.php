<?php

namespace App\Filament\Resources\VotingMemberResource\Pages;

use App\Filament\Resources\VotingMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVotingMembers extends ListRecords
{
    protected static string $resource = VotingMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
