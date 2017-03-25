<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControl extends Controller
{
    public function create()
    {
        return view('user.create');
    }
}
