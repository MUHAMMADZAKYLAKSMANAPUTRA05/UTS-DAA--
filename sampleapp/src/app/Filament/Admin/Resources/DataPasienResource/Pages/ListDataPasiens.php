<?php

namespace App\Filament\Admin\Resources\DataPasienResource\Pages;

use App\Filament\Admin\Resources\DataPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataPasiens extends ListRecords
{
    protected static string $resource = DataPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
