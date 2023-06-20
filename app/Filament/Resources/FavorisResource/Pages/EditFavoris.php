<?php

namespace App\Filament\Resources\FavorisResource\Pages;

use App\Filament\Resources\FavorisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFavoris extends EditRecord
{
    protected static string $resource = FavorisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
