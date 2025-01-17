<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\backend\UserController;

Route::get("/",[HomeController::class,"index"]);
Route::get("/san-pham",[ProductController::class,"index"]);
Route::get("/chi-tiet-san-pham/{slug}",[ProductController::class,"product_detail"]);
Route::get("/lien-he",[ContactController::class,"index"]);
Route::get("/user",[UserController::class,"index"]);
Route::get("/user/1",[UserController::class,"show"]);
Route::get("/user/{id}/edit",[UserController::class,"edit"]);
Route::get("/user/list/{page?}",[UserController::class,"list"]);