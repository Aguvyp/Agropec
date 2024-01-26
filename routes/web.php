<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
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
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/shop', [
    App\Http\Controllers\ProductController::class, 'index'
])->name('shop');

Route::get('/shop/create', [
    App\Http\Controllers\ProductController::class, 'create'
])->name('shop.create');

Route::middleware('auth')->group(function()
{
Route::post('/shop', [
    App\Http\Controllers\ProductController::class, 'store'
])->name('shop.store');
});

Route::get('/shop/delete/{product}', [
    App\Http\Controllers\ProductController::class, 'delete'
])->name('shop.delete');

Route::middleware('auth')->group(function()
{
Route::delete('shop/{product}', [
    App\Http\Controllers\ProductController::class, 'destroy'
])->name('shop.destroy');
});

Route::get('/shop/edit/{product}', [
    App\Http\Controllers\ProductController::class, 'edit'
])
->name('shop.edit');


Route::put('/shop/{product}', [
    App\Http\Controllers\ProductController::class, 'update'
])->name('shop.update');



Route::get('user/{user}', [
    \App\Http\Controllers\UserController::class, 'profile'
])->name('user.profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
