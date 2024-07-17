<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VotingMemberResource\Pages;
use App\Filament\Resources\VotingMemberResource\RelationManagers;
use App\Models\VotingMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VotingMemberResource extends Resource
{
    protected static ?string $model = VotingMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()->maxLength(100),
                Forms\Components\TextInput::make('description')
                    ->required()->maxLength(255)->columnSpan('full'),
                Forms\Components\TextInput::make('author')
                    ->required()->maxLength(100),
                Forms\Components\FileUpload::make('images')
                    ->multiple()->image()->reorderable()->openable()->minFiles(1),
                Forms\Components\FileUpload::make('music')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('author'),
                Tables\Columns\TextColumn::make('images'),
                Tables\Columns\TextColumn::make('music'),
                Tables\Columns\TextColumn::make('votes'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVotingMembers::route('/'),
            'create' => Pages\CreateVotingMember::route('/create'),
            'edit' => Pages\EditVotingMember::route('/{record}/edit'),
        ];
    }
}
