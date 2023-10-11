<?php

namespace App\Filament\Resources\TugasLuarResource\Pages;

use App\Filament\Resources\TugasLuarResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTugasLuar extends ViewRecord
{
    protected static string $resource = TugasLuarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
