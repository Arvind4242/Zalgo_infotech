<?php

namespace App\Filament\Resources\ContactMails\Pages;

use App\Filament\Resources\ContactMails\ContactMailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactMails extends ListRecords
{
    protected static string $resource = ContactMailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
