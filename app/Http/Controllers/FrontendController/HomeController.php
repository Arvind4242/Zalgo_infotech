<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * All HomePage Function Include
     * 
     */

    // Home One 
    public function indexOne(){
        $htmlClass = 'home-one';
        $bodyClass = '';
        return view('frontend.homes.indexOne', compact('bodyClass', 'htmlClass'));
    }
    // Home Two 
    public function indexTwo(){
        $htmlClass = 'home-two';
        $bodyClass = '';
        return view('frontend.homes.indexTwo', compact('bodyClass', 'htmlClass'));
    }
    // Home Three 
    public function indexThree(){
        $htmlClass = 'home-three crm-page';
        $bodyClass = '';
        return view('frontend.homes.indexThree', compact('bodyClass', 'htmlClass'));
    }
    // Home Four 
    public function indexFour(){
        $htmlClass = 'home-crm heading-black';
        $bodyClass = '';
        return view('frontend.homes.indexFour', compact('bodyClass', 'htmlClass'));
    }
    // Home Five 
    public function indexFive(){
        $htmlClass = 'home-five';
        $bodyClass = '';
        return view('frontend.homes.indexFive', compact('bodyClass', 'htmlClass'));
    }
}
