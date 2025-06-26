<?php

namespace App\Filament\Resources\TiposDocumentoResource\Pages;

use App\Filament\Resources\TiposDocumentoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTiposDocumentos extends ListRecords
{
    protected static string $resource = TiposDocumentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
