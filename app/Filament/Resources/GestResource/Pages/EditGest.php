<?php

namespace App\Filament\Resources\GestResource\Pages;

use App\Filament\Resources\GestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGest extends EditRecord
{
    protected static string $resource = GestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
