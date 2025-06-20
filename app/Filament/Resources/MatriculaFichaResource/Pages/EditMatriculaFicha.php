<?php

namespace App\Filament\Resources\MatriculaFichaResource\Pages;

use App\Filament\Resources\MatriculaFichaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMatriculaFicha extends EditRecord
{
    protected static string $resource = MatriculaFichaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
