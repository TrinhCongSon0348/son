<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class ProductController
{
    public function index()
    {
        return view('frontend.product');
    }

    public function product_detail($slug)
    {
        return view('frontend.product_detail');
    }
}
