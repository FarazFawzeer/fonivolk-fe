<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.details');


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('home');
// });

Route::get('/contact', function () {
    return view('contact');
});




Route::get('/phone-detail', function () {
    return view('phone_detail');
});



