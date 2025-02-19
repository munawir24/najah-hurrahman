<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Pendaftaran;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;
use App\Filament\Resources\PendaftaranResource\Filters\TglBerangkatFilter;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Umroh & Haji';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    // Forms\Components\TextInput::make('paket_id')
                    //     ->required()
                    //     ->numeric(),
                    Forms\Components\Select::make('paket_id')
                        ->relationship('paket',  'nama')
                        ->searchable()
                        ->preload(),
                    Forms\Components\TextInput::make('nama')
                        ->label('Nama Sesuai Paspor')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('no_passport')
                        ->label('Nomor Paspor')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('tgl_passport')
                        ->label('Tanggal Pengeluaran Paspor')
                        ->required(),
                    Forms\Components\TextInput::make('tempat_passport')
                        ->label('Tempat yang Pengeluaran Paspor')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('masa_passport')
                        ->label('Tahun Pembuatan Paspor	')
                        ->placeholder('YYYY'),
                    Forms\Components\TextInput::make('expired_passport')
                        ->label('Tahun Berakhir Paspor')
                        ->placeholder('YYYY'),
                    Forms\Components\TextInput::make('tempat_lahir')
                        ->label('Tempat Lahir')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('tgl_lahir')
                        ->label('Tanggal Lahir')
                        ->required(),
                    Forms\Components\Textarea::make('alamat')
                        ->label('Alamat Lengkap')
                        ->required()
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('city')
                        ->label('Kota Sesuai KTP')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('no_hp')
                        ->label('Nomor HP')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('pekerjaan')
                        ->label('Pekerjaan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('jenis_mahrom')
                        ->required()
                        ->options([
                            'Tanpa Mahrom' => 'Tanpa Mahrom',
                            'Orang Tua' => 'Orang Tua',
                            'Pasangan' => 'Pasangan',
                            'Saudara' => 'Saudara',
                            'Anak' => 'Anak'
                        ]),
                    Forms\Components\TextInput::make('nama_mahrom')
                        ->label('Nama Mahrom')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('Jika Tanpa Mahrom Isikan -'),
                    Forms\Components\Select::make('jenis_kamar')
                        ->required()
                        ->options([
                            'Single' => 'Single',
                            'Double' => 'Double',
                            'Triple' => 'Triple',
                            'Quad' => 'Quad'
                        ]),
                    Forms\Components\DatePicker::make('tgl_berangkat')
                        ->label('Tanggal Keberangkatan')
                        ->required(),
                    Forms\Components\Toggle::make('status')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),
                Tables\Columns\TextColumn::make('nama')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('paket.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('paket.harga')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),
                // Tables\Columns\TextColumn::make('no_passport')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('tgl_passport')
                //     ->date()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('tempat_passport')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('masa_passport')
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('expired_passport')
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('tempat_lahir')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('tgl_lahir')
                //     ->date()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('city')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('no_hp')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('pekerjaan')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('jenis_mahrom')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('nama_mahrom')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('jenis_kamar')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('tgl_berangkat')
                //     ->date()
                //     ->sortable(),
                Tables\Columns\ToggleColumn::make('status')->label('Keberangkatan'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TglBerangkatFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                // Tables\Actions\ForceDeleteAction::make(),
                // Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    // Tables\Actions\ForceDeleteBulkAction::make(),
                    // Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}