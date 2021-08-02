<?php

use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\ServiceController;
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
    return view('home');
});

Route::get('tentang-perusahaan', function () {
    return view('tentang-perusahaan');
})->name('tentang-perusahaan');

Route::get('profile-dewan-komisaris', function () {
    return view('profile_dewan_komisaris');
})->name('profile-dewan-komisaris');

Route::get('profile-direksi', function () {
    return view('profile_direksi');
})->name('profile-direksi');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('portofolio', function () {
    return view('portofolio');
})->name('portofolio');

Route::get('hubungi-kami', function () {
    return view('hubungi-kami');
})->name('hubungi-kami');

Route::get('portofolio-single', function () {
    return view('portofolio-single');
})->name('portofolio-single');

Route::get('blog-detail', function () {
    return view('blog-detail');
})->name('blog-detail');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/kebijakan-k3-pdf', [KebijakanController::class, 'K3KebijakanPDF'])->name('K3KebijakanPDF');
Route::get('/lihat-kebijakan-k3-pdf', [KebijakanController::class, 'LihatK3KebijakanPDF'])->name('LihatK3KebijakanPDF');
Route::get('/pengalaman-pekerjaan-pdf', [KebijakanController::class, 'pengalamanPekerjaanPDF'])->name('pengalamanPekerjaanPDF');
Route::get('/lihat-pengalaman-pekerjaan-pdf', [KebijakanController::class, 'LihatpengalamanPekerjaanPDF'])->name('LihatpengalamanPekerjaanPDF');
