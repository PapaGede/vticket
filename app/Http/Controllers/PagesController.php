<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('main');
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getService()
    {
        return view('pages.services');
    }
}
