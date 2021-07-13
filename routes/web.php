<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome1');
});

Route::get('tentang-perusahaan', function () {
    return view('tentang-perusahaan');
})->name('tentang-perusahaan');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('portofolio', function () {
    return view('portofolio');
})->name('portofolio');

Route::get('hubungi-kami', function () {
    return view('hubungi-kami');
})->name('hubungi-kami');
