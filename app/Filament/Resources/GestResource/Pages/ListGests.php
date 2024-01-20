<?php

namespace App\Filament\Resources\GestResource\Pages;

use App\Filament\Resources\GestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGests extends ListRecords
{
    protected static string $resource = GestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
