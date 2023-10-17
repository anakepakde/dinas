<?php

namespace App\Filament\Resources\TugasKepanitiaanResource\Pages;

use App\Filament\Resources\TugasKepanitiaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTugasKepanitiaans extends ListRecords
{
    protected static string $resource = TugasKepanitiaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
