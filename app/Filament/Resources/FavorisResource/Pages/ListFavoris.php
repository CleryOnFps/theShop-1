<?php

namespace App\Filament\Resources\FavorisResource\Pages;

use App\Filament\Resources\FavorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFavoris extends ListRecords
{
    protected static string $resource = FavorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
