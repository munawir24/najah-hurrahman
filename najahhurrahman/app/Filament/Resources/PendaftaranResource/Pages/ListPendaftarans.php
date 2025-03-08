<?php

namespace App\Filament\Resources\PendaftaranResource\Pages;

use Filament\Actions;
use App\Models\Pendaftaran;
use Filament\Resources\Components;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PendaftaranResource;
use Illuminate\Database\Eloquent\Builder;

class ListPendaftarans extends ListRecords
{
    protected static string $resource = PendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'Semua' => Components\Tab::make()->badge(Pendaftaran::all()->count())->modifyQueryUsing(fn(Builder $query) => $query->tap(fn() => $this->dispatch('refresh'))),
            'Belum Umroh' => Components\Tab::make()
                ->badge(
                    Pendaftaran::whereHas('paket', function ($query) {
                        $query->where('nama', 'LIKE', '%Umroh%');
                    })->where('status', 0)->count()
                )
                ->modifyQueryUsing(
                    fn(Builder $query) =>
                    $query->whereHas('paket', function ($query) {
                        $query->where('nama', 'LIKE', '%Umroh%');
                    })->where('status', 0)
                        ->tap(fn() => $this->dispatch('refresh'))
                ),
            'Belum Haji' => Components\Tab::make()
                ->badge(
                    Pendaftaran::whereHas('paket', function ($query) {
                        $query->where('nama', 'LIKE', '%Haji%');
                    })->where('status', 0)->count()
                )
                ->modifyQueryUsing(
                    fn(Builder $query) =>
                    $query->whereHas('paket', function ($query) {
                        $query->where('nama', 'LIKE', '%Haji%');
                    })->where('status', 0)
                        ->tap(fn() => $this->dispatch('refresh'))
                ),
            'Sudah Berangkat' => Components\Tab::make()->badge(Pendaftaran::query()->where('status', true)->count())->modifyQueryUsing(fn(Builder $query) => $query->where('status', true)->tap(fn() => $this->dispatch('refresh'))),
        ];
    }
}