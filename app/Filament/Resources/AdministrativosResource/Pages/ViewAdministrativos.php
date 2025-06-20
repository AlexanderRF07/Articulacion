<?php

namespace App\Filament\Resources\AdministrativosResource\Pages;

use App\Filament\Resources\AdministrativosResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAdministrativos extends ViewRecord
{
    protected static string $resource = AdministrativosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
