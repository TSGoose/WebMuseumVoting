<?php

namespace App\Filament\Resources\VotingMemberResource\Pages;

use App\Filament\Resources\VotingMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVotingMember extends EditRecord
{
    protected static string $resource = VotingMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
