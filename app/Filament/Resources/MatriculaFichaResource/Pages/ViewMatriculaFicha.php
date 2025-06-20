<?php

namespace App\Filament\Resources\MatriculaFichaResource\Pages;

use App\Filament\Resources\MatriculaFichaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMatriculaFicha extends ViewRecord
{
    protected static string $resource = MatriculaFichaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
