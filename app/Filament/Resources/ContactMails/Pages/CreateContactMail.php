<?php

namespace App\Filament\Resources\ContactMails\Pages;

use App\Filament\Resources\ContactMails\ContactMailResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContactMail extends CreateRecord
{
    protected static string $resource = ContactMailResource::class;
}
