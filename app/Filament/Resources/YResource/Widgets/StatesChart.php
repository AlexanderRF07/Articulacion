<?php

namespace App\Filament\Resources\YResource\Widgets;

use App\Models\Aprendiz;
use App\Models\Colegio;
use App\Models\Ficha;
use App\Models\Instructor;
use App\Models\Programa;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatesChart extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total de Aprendices', Aprendiz::count())
                ->description('Registrados en el sistema')
                ->descriptionIcon('heroicon-o-users')
                ->color('info')
                ->chart([6,4,5,9,6]),

                Card::make('Total de Intructores', Instructor::count())
                ->description('Registrados en el sistema')
                ->descriptionIcon('heroicon-o-users')
                ->color('info')
                ->chart([6,4,5,9,6]),

                Card::make('Total de Programas', Programa::count())
                ->description('Registrados en el sistema')
                ->descriptionIcon('heroicon-o-users')
                ->color('info')
                ->chart([6,4,5,9,6]),

                Card::make('Total de Fichas', Ficha::count())
                ->description('Registrados en el sistema')
                ->descriptionIcon('heroicon-o-users')
                ->color('info')
                ->chart([6,4,5,9,6]),

                Card::make('Total de Colegios', Colegio::count())
                ->description('Registrados en el sistema')
                ->descriptionIcon('heroicon-o-users')
                ->color('info')
                ->chart([6,4,5,9,6]),

                Card::make('Total de Fichas', Ficha::count())
                ->description('Registrados en el sistema')
                ->descriptionIcon('heroicon-o-users')
                ->color('info')
                ->chart([6,4,5,9,6]),
        ];
        
    }
}
