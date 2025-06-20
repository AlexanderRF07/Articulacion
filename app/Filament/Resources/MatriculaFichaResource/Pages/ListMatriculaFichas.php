<?php

namespace App\Filament\Resources\MatriculaFichaResource\Pages;

use App\Filament\Resources\MatriculaFichaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMatriculaFichas extends ListRecords
{
    protected static string $resource = MatriculaFichaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
