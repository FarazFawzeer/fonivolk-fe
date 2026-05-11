<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.details');

Route::get('/accessories', [AccessoriesController::class, 'grid'])
    ->name('accessories.grid');

Route::get('/accessories/{id}', [AccessoriesController::class, 'detail'])
    ->name('accessories.detail');


Route::post('/inquiry/store', [InquiryController::class, 'store'])
    ->name('inquiry.store');

Route::post('/feedback/store', [FeedbackController::class, 'store'])
    ->name('feedback.store');

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
