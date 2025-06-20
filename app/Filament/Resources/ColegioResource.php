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
                    ->maxLength(45),
                Forms\Components\TextInput::make('departamento')
                    ->maxLength(45),
                Forms\Components\TextInput::make('ciudad')
                    ->maxLength(45),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('idcolegios')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('departamento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ciudad')
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
            'index' => Pages\ListColegios::route('/'),
            'create' => Pages\CreateColegio::route('/create'),
            'view' => Pages\ViewColegio::route('/{record}'),
            'edit' => Pages\EditColegio::route('/{record}/edit'),
        ];
    }
}
