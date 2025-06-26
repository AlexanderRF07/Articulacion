<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AniosEscolaresResource\Pages;
use App\Filament\Resources\AniosEscolaresResource\RelationManagers;
use App\Models\AniosEscolares;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AniosEscolaresResource extends Resource
{
    protected static ?string $model = AniosEscolares::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('anios_escolares'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('anios_escolares')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAniosEscolares::route('/'),
            'create' => Pages\CreateAniosEscolares::route('/create'),
            'view' => Pages\ViewAniosEscolares::route('/{record}'),
            'edit' => Pages\EditAniosEscolares::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
{
    return true;
}
}
