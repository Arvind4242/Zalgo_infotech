<?php

namespace App\Filament\Resources\PlanInquiries;

use App\Filament\Resources\PlanInquiries\Pages\ListPlanInquiries;
use App\Filament\Resources\PlanInquiries\Pages\ViewPlanInquiry;
use App\Filament\Resources\PlanInquiries\Schemas\PlanInquiryInfolist;
use App\Filament\Resources\PlanInquiries\Tables\PlanInquiriesTable;
use App\Models\PlanInquiry;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlanInquiryResource extends Resource
{
    protected static ?string $model = PlanInquiry::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCreditCard;

    protected static ?string $navigationLabel = 'Plan Inquiries';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function infolist(Schema $schema): Schema
    {
        return PlanInquiryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlanInquiriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPlanInquiries::route('/'),
            'view'  => ViewPlanInquiry::route('/{record}'),
        ];
    }
}
