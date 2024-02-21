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
    return view('welcome');
});

Route::get('blog', function()   {
    return view('blog');
});

Route::redirect('/blog1', '/belajar');
Route::permanentRedirect('/dari_sini_kak','/kesini_lah');

Route::get('belajar', function()   {
    return view('belajar');
});