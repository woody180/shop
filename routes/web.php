<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Models\Cart;

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


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');



Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function() {
    
    Route::get('/', function() {
        return view('dashboard');
    })->name('index');
    
    Route::get('/cart', function() {
        
        $cartModel = new App\Models\Cart();
        $cartItems = $cartModel->with('product')->with('user')->get();
        
        return view('adminCart', [
            'cartItems' => $cartModel->with('product')->get()
        ]);
    })->name('cart');
});


Route::resource('/home', ProductController::class);
Route::resource('/', ProductController::class);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('cart', CartController::class);

Route::put('checkout/{id}', [CartController::class, 'checkout']);


Route::get('reset-cart', function(Request $request) {

    Cart::truncate();
    
    return back();
});

require __DIR__.'/auth.php';