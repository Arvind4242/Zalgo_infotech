<?php

namespace App\Settings;

use App\Casts\AdsImageUrlCast;
use Spatie\LaravelSettings\Settings;

class WebSettings extends Settings
{
    public string $trail_days;

    public array $social_links;

    public array $hero_ads_right;

    public array $hero_ads_left;

    public array $individual_ads;

    public array $collab_ads;

    public float $monthly_traffic;

    public float $newsletter_reach;

    public int $verified_directory_listing;

    public array $media_partners;

    public array $sponsored_partners;

    public array $keywords;

    public array $other_ads;

    public array $enquiry_reason;

    public array $company_ads;

    public string $gst_percentage;
   // public bool $show_gst;

    public string $enable_mobile_verification;

    public array $business_type_settings;

//   public string $login_banner_image;

    
    // public bool $manufacturers;
    // public bool $retailer;
    // public bool $famd;
    // public bool $distributer;
    // public int $trail_days_additional;


    public static function group(): string
    {
        return 'web';
    }

    public static function casts(): array
    {
        if (request()->route()->getName() != 'filament.admin.pages.manage-site') {
            return [
                'hero_ads_left' => AdsImageUrlCast::class,
                'hero_ads_right' => AdsImageUrlCast::class,
                'individual_ads' => AdsImageUrlCast::class,
                'collab_ads' => AdsImageUrlCast::class,
                'media_partners' => AdsImageUrlCast::class,
                'sponsored_partners' => AdsImageUrlCast::class,
                'other_ads' => AdsImageUrlCast::class,
                'company_ads' => AdsImageUrlCast::class,
                'login_banner_image' => AdsImageUrlCast::class,
            ];
        }

        return [];

    }

    // protected function defaults(): array
    // {
    //     return [
    //         'gst_percentage' => '0',
    //        // 'show_gst' => true,
    //     ];
    // }

    protected function defaults(): array
{
    return [
        'gst_percentage' => '0',
         'login_banner_image' => '',
        'business_type_settings' => [
            'manufacturers' => false,
            'retailer' => false,
            'famd' => false,
            'distributer' => false,
            'trail_days_additional' => 0,
        ],
    ];
}


}
