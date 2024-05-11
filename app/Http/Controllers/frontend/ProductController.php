<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class ProductController
{
    public function index()
    {
        return view("frontend.product");
    }
}
