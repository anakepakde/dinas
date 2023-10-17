<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TugasLuarResource\Pages;
use App\Filament\Resources\TugasLuarResource\RelationManagers;
use App\Models\Anggota;
use App\Models\TugasLuar;
use Filament\Forms;
use Filament\Forms\Components\Builder as ComponentsBuilder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Schema\Builder as SchemaBuilder;

class TugasLuarResource extends Resource
{
    protected static ?string $model = TugasLuar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Repeater::make('anggota')
                // ->schema([
                //     Forms\Components\Select::make('anggota_id')
                //     ->relationship('anggota', 'nama')
                //     ->options(Anggota::all()->pluck('nama', 'id'))
                //     ->searchable()
                //     ->required(),
                //     ]),
                Forms\Components\Select::make('anggota_id')
                    ->relationship('anggota', 'nama')
                    ->multiple()
                    ->options(Anggota::all()->pluck('nama', 'id'))
                    ->required(),

                // Forms\Components\Select::make('anggota_id')
                //     ->relationship('anggota', 'nama')
                //     ->required(),
                Forms\Components\Select::make('kategori_tugas')
                    ->options([
                        'Tim' => 'Tim',
                        'Individu' => 'Individu',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('tempat_tugas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_terima_tugas')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_mulai_tugas')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_selesai_tugas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('anggota.nama')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori_tugas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_tugas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_terima_tugas')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_mulai_tugas')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_selesai_tugas')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListTugasLuars::route('/'),
            'create' => Pages\CreateTugasLuar::route('/create'),
            'view' => Pages\ViewTugasLuar::route('/{record}'),
            'edit' => Pages\EditTugasLuar::route('/{record}/edit'),
        ];
    }
}
