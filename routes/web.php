<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\ProductsController;

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
Route::get('/', [ProductsController::class, 'index']);
Route::prefix('/product')->group(function(){
    //Hompage
    Route::get('/', [ProductsController::class, 'index'])->name('products.index');

    //show product
    Route::get('/{products}', [ProductsController::class, 'show'])->name('products.show')->where('products', '[0-9]+');
});

//Category :: Single controller
Route::get('/category/{category}', CategoryController::class)->name('category')->where('category', '[1-3]');

//User Account
Route::prefix('/user')->group(function(){
    //Signin page
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    //Signup page
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/create', [UserController::class, 'store'])->name('user.store');
});




//Fallback route || Must be the last route.
Route::fallback(FallbackController::class);
