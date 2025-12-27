<?php

namespace App\Filament\Resources\ContactMails\Pages;

use App\Filament\Resources\ContactMails\ContactMailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactMail extends ViewRecord
{
    protected static string $resource = ContactMailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
