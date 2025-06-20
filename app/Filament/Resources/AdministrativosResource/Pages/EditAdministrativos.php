<?php

namespace App\Filament\Resources\AdministrativosResource\Pages;

use App\Filament\Resources\AdministrativosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdministrativos extends EditRecord
{
    protected static string $resource = AdministrativosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
