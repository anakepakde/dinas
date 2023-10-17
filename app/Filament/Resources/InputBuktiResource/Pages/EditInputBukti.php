<?php

namespace App\Filament\Resources\InputBuktiResource\Pages;

use App\Filament\Resources\InputBuktiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInputBukti extends EditRecord
{
    protected static string $resource = InputBuktiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
