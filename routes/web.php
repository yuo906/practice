<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
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

Route::get('/', [ProductController::class, 'index']);
Route::get('/cart', [ProductController::class, 'cart'])->name('product.cart');

Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

Route::resource('/type',TypeController::class);
