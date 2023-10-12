<?php

namespace App\Filament\Resources\TugasKepanitiaanResource\Pages;

use App\Filament\Resources\TugasKepanitiaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTugasKepanitiaan extends ViewRecord
{
    protected static string $resource = TugasKepanitiaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
