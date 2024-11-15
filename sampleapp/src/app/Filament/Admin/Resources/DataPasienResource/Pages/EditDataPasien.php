<?php

namespace App\Filament\Admin\Resources\DataPasienResource\Pages;

use App\Filament\Admin\Resources\DataPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataPasien extends EditRecord
{
    protected static string $resource = DataPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
