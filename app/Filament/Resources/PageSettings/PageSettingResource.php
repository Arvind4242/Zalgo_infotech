<?php

namespace App\Filament\Resources\PageSettings;

use App\Filament\Resources\PageSettings\Pages\EditPageSetting;
use App\Filament\Resources\PageSettings\Pages\ListPageSettings;
use App\Filament\Resources\PageSettings\Schemas\PageSettingForm;
use App\Filament\Resources\PageSettings\Tables\PageSettingsTable;
use App\Models\PageSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PageSettingResource extends Resource
{
    protected static ?string $model = PageSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $navigationLabel = 'Page SEO Settings';

    protected static \UnitEnum|string|null $navigationGroup = 'Website';

    protected static ?string $recordTitleAttribute = 'page_name';

    public static function form(Schema $schema): Schema
    {
        return PageSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageSettingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPageSettings::route('/'),
            'edit'  => EditPageSetting::route('/{record}/edit'),
        ];
    }
}
