<?php

namespace App\Filament\Resources\PendaftaranResource\Filters;

use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\DB;

class TglBerangkatFilter
{
    public static function make(): Filter
    {
        return Filter::make('tgl_berangkat')
            ->form([
                Select::make('tgl_berangkat')
                    ->label('Pilih Tanggal Berangkat')
                    ->options(
                        DB::table('pendaftarans')
                            ->select('tgl_berangkat')
                            ->distinct()
                            ->orderBy('tgl_berangkat', 'asc')
                            ->get()
                            ->pluck('tgl_berangkat')
                            ->mapWithKeys(function ($date) {
                                return [$date => \Carbon\Carbon::parse($date)->translatedFormat('d F Y')];
                            })
                            ->toArray()
                    )
            ])
            ->query(function (Builder $query, array $data) {
                if (!empty($data['tgl_berangkat'])) {
                    $query->whereDate('tgl_berangkat', $data['tgl_berangkat']);
                }
            });
    }
}