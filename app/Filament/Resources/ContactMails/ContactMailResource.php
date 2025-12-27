<?php

namespace App\Filament\Resources\ContactMails;

use App\Filament\Resources\ContactMails\Pages\CreateContactMail;
use App\Filament\Resources\ContactMails\Pages\EditContactMail;
use App\Filament\Resources\ContactMails\Pages\ListContactMails;
use App\Filament\Resources\ContactMails\Pages\ViewContactMail;
use App\Filament\Resources\ContactMails\Schemas\ContactMailForm;
use App\Filament\Resources\ContactMails\Schemas\ContactMailInfolist;
use App\Filament\Resources\ContactMails\Tables\ContactMailsTable;
use App\Models\ContactMail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactMailResource extends Resource
{
    protected static ?string $model = ContactMail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'contact mail';

    public static function form(Schema $schema): Schema
    {
        return ContactMailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactMailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactMailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactMails::route('/'),
            'create' => CreateContactMail::route('/create'),
            'view' => ViewContactMail::route('/{record}'),
            'edit' => EditContactMail::route('/{record}/edit'),
        ];
    }
}
