<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageControl extends Controller
{
    //
    public function home()
    {
        return view("static_page/home");
    }
    public function help()
    {
        return view("static_page/help");
    }
    public function about()
    {
        return view("static_page/about");
    }
}
