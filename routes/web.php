<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\FlavoursController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProductIngredientController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\WishlistsController;
use App\Models\Aboutus;
use App\Models\Alamat;
use App\Models\Flavours;
use App\Models\Histori;
use App\Models\Ingredients;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Product_ingredient;
use App\Models\Products;
use App\Models\Reviews;
use App\Models\User;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;
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
Route::get('/details', function () {
    return view('detail');
});
//------------------------------------

//Keranjang

//Histori
// Route::get('/history', function () {
//     return view('histori');
// });

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/wishlists', function () {
    return view('wishlist');
});



Route::get('/', function () {
    return view('home');
});

Route::get('/admins', function () {
    return view('admin/index',[
        'pentol' => User::all()
    ]);
})->middleware('admin');

Route::get('/reviews', function () {
    return view('admin/review',[
        'pentol' => Reviews::all()
    ]);
})->middleware('admin');



Route::get('/product', function () {
    return view('product', [
        'pagetitle' => 'Products Page',
        'products' => Products::all(),
        'categorie' => Kategori::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'pagetitle' => 'About us',
        'aboutus' => Aboutus::allData()
    ]);
});

// Route::get('/createp', [ProductsController::class, 'create']); //pindadh untuk ke add product form
// Route::get('/addproduct', [ProductsController::class, 'store']);


// Route::get('/crproduct', function () {
//     return view('create/cr_product', [
//         'pagetitle' => 'Create Products',
//         'products' => Products::all(),
//         'flavours' => Flavours::all(),
//         'categories' => Kategori::all(),
//         'proing' => Product_ingredient::all()
//     ]);
// });

// Route::get('/cralamat', function () {
//     return view('/create/cr_alamat');
// });

Route::resource('alamat', AlamatController::class);
Route::resource('products', ProductsController::class)->middleware("admin");
Route::resource('product_ingredients', ProductIngredientController::class)->middleware('admin');
Route::resource('ingredients', IngredientsController::class)->middleware('admin');
Route::resource('category', KategoriController::class)->middleware('admin');
Route::resource('flavours', FlavoursController::class)->middleware('admin');
Route::resource('histori', HistoriController::class);
Route::resource('cart', KeranjangController::class);
Route::resource('review', ReviewsController::class);
Route::resource('wishlist', WishlistsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
