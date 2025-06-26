<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ColegioResource\Pages;
use App\Filament\Resources\ColegioResource\RelationManagers;
use App\Models\Colegio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ColegioResource extends Resource
{
    protected static ?string $model = Colegio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('departamento')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('ciudad')
                    ->required()
                    ->maxLength(45),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('departamento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ciudad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListColegios::route('/'),
            'create' => Pages\CreateColegio::route('/create'),
            'edit' => Pages\EditColegio::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
{
    return true;
}
}
