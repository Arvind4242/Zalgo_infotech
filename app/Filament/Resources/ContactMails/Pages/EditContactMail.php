<?php

namespace App\Filament\Resources\ContactMails\Pages;

use App\Filament\Resources\ContactMails\ContactMailResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactMail extends EditRecord
{
    protected static string $resource = ContactMailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
