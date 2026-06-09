<?php

namespace App\Filament\Resources\PlanInquiries\Pages;

use App\Filament\Resources\PlanInquiries\PlanInquiryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlanInquiry extends ViewRecord
{
    protected static string $resource = PlanInquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
