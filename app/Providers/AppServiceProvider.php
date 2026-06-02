<?php

namespace App\Providers;

use App\Models\PageSetting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('frontend.includes.partials.head', function ($view) {
            $routeName   = Route::currentRouteName() ?? 'home';
            $pageSetting = PageSetting::forRoute($routeName);

            $view->with([
                'metaTitle'        => $pageSetting?->meta_title       ?: 'Zalgo Infotech - IT Solutions & Web Development',
                'metaDescription'  => $pageSetting?->meta_description ?: 'Zalgo Infotech delivers cutting-edge web development, AI solutions, and digital marketing services.',
                'metaKeywords'     => $pageSetting?->keywords         ?: '',
                'metaFocusKeyword' => $pageSetting?->focus_keyword    ?: '',
            ]);
        });
    }
}
