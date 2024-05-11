<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class ContactController
{
    public function index()
    {
        return view('frontend.contact');
    }
}
