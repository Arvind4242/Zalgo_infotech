<?php

namespace App\Filament\Resources\PlanInquiries\Pages;

use App\Filament\Resources\PlanInquiries\PlanInquiryResource;
use Filament\Resources\Pages\ListRecords;

class ListPlanInquiries extends ListRecords
{
    protected static string $resource = PlanInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
