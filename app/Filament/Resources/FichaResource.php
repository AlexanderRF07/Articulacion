<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FichaResource\Pages;
use App\Filament\Resources\FichaResource\RelationManagers;
use App\Models\Ficha;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FichaResource extends Resource
{
    protected static ?string $model = Ficha::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('codigo')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('fecha_inicio')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('cupos')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('anios_escolares_idanios_escolares')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('colegios_idcolegios')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('programas_idprogramas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('instructores_idinstructores')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('codigo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_inicio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cupos')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anios_escolares_idanios_escolares')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('colegios_idcolegios')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('programas_idprogramas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('instructores_idinstructores')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListFichas::route('/'),
            'create' => Pages\CreateFicha::route('/create'),
            'edit' => Pages\EditFicha::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
{
    return true;
}
}
