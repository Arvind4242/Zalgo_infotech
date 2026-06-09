<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\ContactMail;
use App\Models\JobApplication;
use App\Models\PlanInquiry;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Blog Posts', Blog::count())
                ->description(Blog::where('is_published', true)->count() . ' published')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Pending Comments', BlogComment::where('is_approved', false)->count())
                ->description('Awaiting approval')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('warning'),

            Stat::make('Job Applications', JobApplication::count())
                ->description(JobApplication::whereDate('created_at', today())->count() . ' today')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('info'),

            Stat::make('Contact Messages', ContactMail::count())
                ->description(ContactMail::whereDate('created_at', today())->count() . ' today')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('primary'),

            Stat::make('Plan Inquiries', PlanInquiry::count())
                ->description(PlanInquiry::whereDate('created_at', today())->count() . ' today')
                ->descriptionIcon('heroicon-m-credit-card')
                ->color('warning'),
        ];
    }
}
