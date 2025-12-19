<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Models\Category;
use App\Settings\HamburgerMenu;
use App\Settings\WebSettings;

class HomeController extends BaseController
{
    public function index()
    {
        $settings = app(WebSettings::class);
        $category = Category::with('parent')->whereNotNull('parent_id')->get();

        return $this->sendResponse(['settings' => $settings->toArray(), 'category' => $category], 'Settings Found');
    }

    public function hamburgerMenu()
    {
        $hamburger_menu = app(HamburgerMenu::class);

        return $this->sendResponse($hamburger_menu->toArray(), 'Hamburger Menu Found');
    }
}
