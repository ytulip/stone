<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function anyIndex()
    {
        return view('index');
    }

    public function anyHome()
    {
        return view('home');
    }

    public function anyAbout()
    {
        return view('about');
    }
}