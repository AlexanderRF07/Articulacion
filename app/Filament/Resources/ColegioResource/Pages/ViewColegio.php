<?php

namespace App\Filament\Resources\ColegioResource\Pages;

use App\Filament\Resources\ColegioResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewColegio extends ViewRecord
{
    protected static string $resource = ColegioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
