<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Pendaftaran;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('no_passport')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('tgl_passport')
                        ->required(),
                    Forms\Components\TextInput::make('tampat_passport')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('masa_passport')
                        ->placeholder('YYYY'),
                        Forms\Components\TextInput::make('expired_passport')
                        ->placeholder('YYYY'),
                    Forms\Components\TextInput::make('tempat_lahir')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('tgl_lahir')
                        ->required(),
                    Forms\Components\Textarea::make('alamat')
                        ->required()
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('city')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('no_hp')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('pekerjaan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('jenis_mahrom')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('nama_mahrom')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('jenis_kamar')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('tgl_berangkat')
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
                Tables\Columns\TextColumn::make('paket.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_passport')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_passport')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tampat_passport')
                    ->searchable(),
                Tables\Columns\TextColumn::make('masa_passport')
                    ->sortable(),
                Tables\Columns\TextColumn::make('expired_passport')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_mahrom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_mahrom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kamar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_berangkat')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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