<?php

namespace App\Filament\Widgets;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\Widget;

class Addimage extends BaseWidget
{
    protected static string $view = 'filament.widgets.addimage';
    protected int | string | array $columnSpan = 1;
}
