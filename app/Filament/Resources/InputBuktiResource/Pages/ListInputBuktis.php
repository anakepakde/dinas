<?php

namespace App\Filament\Resources\InputBuktiResource\Pages;

use App\Filament\Resources\InputBuktiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInputBuktis extends ListRecords
{
    protected static string $resource = InputBuktiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
