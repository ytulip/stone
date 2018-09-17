<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function anyIndex()
    {
        return view('index');
    }
}