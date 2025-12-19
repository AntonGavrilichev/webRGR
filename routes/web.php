<?php

use \App\Http\Controllers\Auth\RegisteredUserController;
use \App\Http\Controllers\Auth\AuthenticatedSessionController;
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
Route::middleware('set_locale')->group(function () {

    Route::get('/', 'App\Http\Controllers\MainController@index')->name('main.index');
    Route::get('aboutUs', 'App\Http\Controllers\AboutUsController@index')->name('aboutUs.index');
    Route::get('catalog', 'App\Http\Controllers\CatalogController@index')->name('catalog.index');
    Route::get('contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
    Route::get('profile', 'App\Http\Controllers\ProfileController@index')->name('profile.index');
    Route::get('orders/{orderId}', [\App\Http\Controllers\ProfileController::class, 'showOrder'])->name('order.show');

    Route::get('basket', 'App\Http\Controllers\BasketController@index')->name('basket.index');
    Route::post('basket/{id}', 'App\Http\Controllers\BasketController@addItem')->name('basket.addItem');
    Route::delete('basket/{id}', 'App\Http\Controllers\BasketController@deleteItem')->name('basket.deleteItem');
    Route::get('basketPlace', 'App\Http\Controllers\BasketController@indexBasketPlace')->name('basketPlace.index');
    Route::post('basketPlace/make-order', 'App\Http\Controllers\BasketController@makeOrder')->name('basket.makeOrder');

    Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send.email');
    Route::get('/locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')->name('locale');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::middleware('auth.admin')->group(function () {
    Route::get('admin/product/add', [\App\Http\Controllers\Admin\AdminAddNewItemController::class, 'index'])->name('admin.add_product');
    Route::post('admin/product/add', [\App\Http\Controllers\Admin\AdminAddNewItemController::class, 'add'])->name('admin.add_product');
    Route::get('admin/product/{id}', [\App\Http\Controllers\Admin\AdminAddNewItemController::class, 'edit'])->name('admin.edit_product');
    Route::post('admin/product/{id}', [\App\Http\Controllers\Admin\AdminAddNewItemController::class, 'update'])->name('admin.update_product');
    Route::delete('admin/product/{id}', [\App\Http\Controllers\Admin\AdminAddNewItemController::class, 'delete'])->name('admin.delete_product');
    Route::get('admin/orders', [\App\Http\Controllers\Admin\AdminListOrdersController::class,'index'])->name('admin.orders_index');
    Route::get('admin/users', 'App\Http\Controllers\Admin\AdminUsersListController@index')->name('admin.users_index');
    Route::get('admin/order', 'App\Http\Controllers\Admin\AdminOrderController@index')->name('admin.order_index');
    Route::get('admin/catalog', 'App\Http\Controllers\Admin\AdminCatalogController@index')->name('admin.catalog_index');
    });
});


