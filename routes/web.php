<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckOutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackendController;

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


// 誰都可以進

Route::get('/', function () {
    return view('product.website');
});
Route::get('/products', [FrontController::class, 'product'])->name('front.products');
Route::get('/message', [MessageController::class, 'index'])->name('message.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// 只有管理者可以進
Route::middleware(['auth', 'role.weight: 1'])->group(function () {
    Route::get('/backend', [BackendController::class, 'index'])->name('backend.index');

    Route::prefix('/product')->group(function () {
        Route::get('/cart', [ProductController::class, 'cart'])->name('product.cart');

        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');

        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');

        Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    });

    Route::resource('/type', TypeController::class);
});





// 只有一般使用者可以進
Route::middleware('auth')->group(function () {

    Route::prefix('/userinfo')->group(function () {
        Route::get('/', [FrontController::class, 'user_info'])->name('userinfo');
        Route::post('/update', [FrontController::class, 'user_info_update'])->name('userinfo.update');
    });

    Route::prefix('/checkout')->group(function () {
        Route::get('/', [CheckOutController::class, 'index'])->name('checkout.index');
        Route::get('/delivery_detail', [CheckOutController::class, 'delivery_detail'])->name('checkout.delivery_detail');
        Route::get('/payment_detail', [CheckOutController::class, 'payment_detail'])->name('checkout.payment_detail');
        Route::get('/order_complete', [CheckOutController::class, 'order_complete'])->name('checkout.order_complete');


        Route::post('/create', [CheckOutController::class, 'create'])->name('checkout.create');
        Route::post('/store', [CheckOutController::class, 'store'])->name('checkout.store');

        Route::get('/edit/{id}', [CheckOutController::class, 'edit'])->name('checkout.edit');
        Route::post('/update/{id}', [CheckOutController::class, 'update'])->name('checkout.update');

        Route::delete('/delete/{id}', [CheckOutController::class, 'destroy'])->name('checkout.delete');
    });

    Route::prefix('/products')->group(function () {
        Route::post('/add-carts', [FrontController::class, 'addcart'])->name('front.addCart');
    });



    // 作業
    Route::prefix('/CheckOut')->group(function () {
        Route::get('/user_check', [CheckOutController::class, 'check'])->name('user.check');
        Route::delete('/user_check_delCart', [CheckOutController::class, 'checkDelCart'])->name('user.check_delCart');
        Route::put('/user_checkqty', [CheckOutController::class, 'changeQty'])->name('user.checkqty');

        Route::get('/user_del_info', [CheckOutController::class, 'del_info'])->name('user.del');
        Route::post('/user_del_info_store', [CheckOutController::class, 'del_info_store'])->name('user.del_store');

        Route::get('/user_pay_info', [CheckOutController::class, 'pay_info'])->name('user.pay');
        Route::post('/user_pay_info_store', [CheckOutController::class, 'pay_info_store'])->name('user.pay_store');
        Route::get('/user_thx', [CheckOutController::class, 'thx'])->name('user.thx');
    });
});

Route::get('/ECpay/{order_id}', [FrontController::class, 'ec_pay'])->name('ecpay');
Route::get('/ECpay/return_back', [FrontController::class, 'ec_pay_return'])->name('ecpay.returnBack');

Route::middleware('auth', 'role.weight: 12')->group(function () {
    Route::prefix('/message')->group(function () {
        Route::post('/create', [MessageController::class, 'create'])->name('message.create');
        Route::post('/store', [MessageController::class, 'store'])->name('message.store');

        Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('message.edit');
        Route::post('/update/{id}', [MessageController::class, 'update'])->name('message.update');
        Route::post('/updateResponse/{id}', [MessageController::class, 'updateResponse'])->name('message.updateResponse');

        Route::delete('/delete/{id}', [MessageController::class, 'destroy'])->name('message.delete');
        Route::delete('/deleteResponse/{id}', [MessageController::class, 'destroyResponse'])->name('message.deleteResponse');
    });

    Route::get('/user_orderlist', [FrontController::class, 'order_list'])->name('user_orderlist');
    Route::get('/user_orderlist/detail/{order_id}', [FrontController::class, 'order_list_detail'])->name('user_orderlist_detail');
    Route::post('/user_order/backtoPay', [FrontController::class, 'back_to_pay'])->name('user_order.back_to_pay');
});





Route::get('/playground', [FrontController::class, 'test'])->name('test.step1');
Route::post('/playground-step1/store', [FrontController::class, 'test1_store'])->name('test.step1Store');
Route::get('/playground-step2', [FrontController::class, 'test2'])->name('test.step2');
