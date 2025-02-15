<?php

namespace App\Filament\Resources\VisitorResource\Widgets;

use Carbon\Carbon;
use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class VisitorOverview extends BaseWidget
{
    protected static ?int $sort = -3;

    protected static bool $isLazy = false;
    protected ?string $heading = 'Analytics';
    protected function getStats(): array
    {
        return [
            Stat::make('Pengunjung Hari Ini', Visitor::whereDate('created_at', Carbon::today())->get()->count())
            ->color('success')
            ->extraAttributes([
                'class' => 'cursor-pointer',
            ]),
            Stat::make('Jumlah Pengunjung', Visitor::count()),
        ];
    }
}