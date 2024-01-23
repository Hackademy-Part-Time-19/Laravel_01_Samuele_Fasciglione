<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome',["titolo1"=>"Home"]);
});

Route::get('/articoli', function () {
    return view('articoli',["titolo2"=>"Articoli"]);
});

Route::get('/chiSono', function () {
    return view('chisono',["titolo3"=>"Chi sono"]);
});
