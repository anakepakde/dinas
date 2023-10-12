<?php

namespace App\Filament\Resources\TugasKepanitiaanResource\Pages;

use App\Filament\Resources\TugasKepanitiaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTugasKepanitiaan extends EditRecord
{
    protected static string $resource = TugasKepanitiaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
