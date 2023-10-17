<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TugasKepanitiaanResource\Pages;
use App\Filament\Resources\TugasKepanitiaanResource\RelationManagers;
use App\Models\TugasKepanitiaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TugasKepanitiaanResource extends Resource
{
    protected static ?string $model = TugasKepanitiaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('kategori_tugas')
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
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori_tugas')
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTugasKepanitiaans::route('/'),
            'create' => Pages\CreateTugasKepanitiaan::route('/create'),
            'view' => Pages\ViewTugasKepanitiaan::route('/{record}'),
            'edit' => Pages\EditTugasKepanitiaan::route('/{record}/edit'),
        ];
    }    
}
