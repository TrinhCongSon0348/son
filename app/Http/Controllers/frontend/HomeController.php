<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class HomeController
{
    public function index()
    {
        return view('frontend.home');
    }
}
