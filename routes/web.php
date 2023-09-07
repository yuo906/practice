<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\MessageController;
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

// Route::get('/', function () {
//     return view('product.website');
// });


// 打包
// Route::prefix('/product')->group(function () {

    Route::get('/', [ProductController::class, 'index']);
    Route::get('/cart', [ProductController::class, 'cart'])->name('product.cart');

    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');

    Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
// });


Route::resource('/type', TypeController::class);

Route::get('/message', [MessageController::class, 'index'])->name('message.index');
Route::post('/message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');

Route::get('/message/edit/{id}', [MessageController::class, 'edit'])->name('message.edit');
Route::post('/message/update/{id}', [MessageController::class, 'update'])->name('message.update');

Route::post('/message/delete/{id}', [MessageController::class, 'destroy'])->name('message.delete');
