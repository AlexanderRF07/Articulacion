<?php

namespace App\Filament\Resources\AniosEscolaresResource\Pages;

use App\Filament\Resources\AniosEscolaresResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAniosEscolares extends EditRecord
{
    protected static string $resource = AniosEscolaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
