<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class   HomeController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function about()
    {
        return view('about');
    }

}
