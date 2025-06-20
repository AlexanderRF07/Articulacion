<?php

namespace App\Filament\Resources\AniosEscolaresResource\Pages;

use App\Filament\Resources\AniosEscolaresResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAniosEscolares extends ListRecords
{
    protected static string $resource = AniosEscolaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
