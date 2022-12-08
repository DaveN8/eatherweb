<?php

use App\Http\Controllers\ProfileController;
use Illuminate\support\facades\Route;

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
//Product ---------------------------
Route::get('/original', function () {
    return view('original');
});

Route::get('/pedas', function () {
    return view('pedas');
});


Route::get('/panggang', function () {
    return view('panggang');
});
//------------------------------------

//Keranjang
Route::get('/keranjang', function () {
    return view('keranjang');
});

//Histori
Route::get('/histori', function () {
    return view('histori');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
