<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentoResource\Pages;
use App\Filament\Resources\DocumentoResource\RelationManagers;
use App\Models\Documento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentoResource extends Resource
{
    protected static ?string $model = Documento::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Documento')
                    ->maxLength(45),
                Forms\Components\TextInput::make('compromisoDeAprendiz')
                    ->maxLength(45),
                Forms\Components\TextInput::make('tratamientoDeMenores')
                    ->maxLength(45),
                Forms\Components\TextInput::make('certificadoEPS')
                    ->maxLength(45),
                Forms\Components\TextInput::make('registroCivil')
                    ->maxLength(45),
                Forms\Components\TextInput::make('url')
                    ->maxLength(255),
                Forms\Components\TextInput::make('estado')
                    ->maxLength(45),
                Forms\Components\TextInput::make('tiposdocumentos_idtiposdocumentos')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('matriculas_fichas_idmatriculas_fichas')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Documento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('compromisoDeAprendiz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tratamientoDeMenores')
                    ->searchable(),
                Tables\Columns\TextColumn::make('certificadoEPS')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registroCivil')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tiposdocumentos_idtiposdocumentos')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('matriculas_fichas_idmatriculas_fichas')
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
            'index' => Pages\ListDocumentos::route('/'),
            'create' => Pages\CreateDocumento::route('/create'),
            'edit' => Pages\EditDocumento::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
{
    return true;
}
}
