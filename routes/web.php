<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ShipmentController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OutComingStocksController;


use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PaymentController;

use Illuminate\Support\Facades\Route;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/product/{slug}', [ProductsController::class, 'show']);
Route::get('/products/quick-view/{slug}', [ProductsController::class, 'quickView']);

Route::get('/carts', [CartController::class, 'index']);
Route::get('/carts/remove/{cartID}', [CartController::class, 'destroy']);
Route::post('/carts', [CartController::class, 'store']);
Route::post('/carts/update', [CartController::class, 'update']);

Route::get('orders/checkout', [OrderController::class, 'checkout']);
Route::post('orders/checkout', [OrderController::class, 'doCheckout']);
Route::post('orders/shipping-cost', [OrderController::class, 'shippingCost']);
Route::post('orders/set-shipping', [OrderController::class, 'setShipping']);
Route::get('orders/received/{orderID}', [OrderController::class, 'received']);
Route::get('orders/cities', [OrderController::class, 'cities']);
Route::get('orders', [OrderController::class, 'index']);
Route::get('orders/{orderID}', [OrderController::class, 'show']);
Route::post('orders/complete/{orderID}', [OrderController::class, 'doComplete']);

Route::post('payments/notification', [PaymentController::class, 'notification']);
Route::get('payments/completed', [PaymentController::class, 'completed']);
Route::get('payments/failed', [PaymentController::class, 'failed']);
Route::get('payments/unfinish', [PaymentController::class, 'unfinish']);

Route::resource('favorites', FavoriteController::class);

Route::get('profile', 'Auth\ProfileController@index');
Route::post('profile', 'Auth\ProfileController@update');

Route::group(
	['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']],
	function () {
		Route::get('dashboard', [DashboardController::class, 'index']);
		Route::resource('categories', CategoryController::class);

		Route::resource('suppliers', SuppliersController::class);
		Route::resource('addstocks', AddStocksController::class);
		Route::post('outcomingstocks/manual', [OutComingStocksController::class, 'storeManual']);
		Route::resource('outcomingstocks', OutComingStocksController::class);

		Route::resource('products', ProductController::class);
		Route::get('products/{productID}/images', [ProductController::class, 'images'])->name('products.images');
		Route::get('products/{productID}/add-image', [ProductController::class, 'addImage'])->name('products.add_image');
		Route::post('products/images/{productID}', [ProductController::class, 'uploadImage'])->name('products.upload_image');
		Route::delete('products/images/{imageID}', [ProductController::class, 'removeImage'])->name('products.remove_image');

		Route::resource('attributes', AttributeController::class);
		Route::get('attributes/{attributeID}/options', [AttributeController::class, 'options'])->name('attributes.options');
		Route::get('attributes/{attributeID}/add-option', [AttributeController::class, 'add_option'])->name('attributes.add_option');
		Route::post('attributes/options/{attributeID}', [AttributeController::class, 'store_option'])->name('attributes.store_option');
		Route::delete('attributes/options/{optionID}', [AttributeController::class, 'remove_option'])->name('attributes.remove_option');
		Route::get('attributes/options/{optionID}/edit', [AttributeController::class, 'edit_option'])->name('attributes.edit_option');
		Route::put('attributes/options/{optionID}', [AttributeController::class, 'update_option'])->name('attributes.update_option');

		Route::resource('roles', RoleController::class);
		Route::resource('users', UserController::class);

		Route::get('orders/trashed', [OrdersController::class, 'trashed']);
		Route::get('orders/restore/{orderID}', [OrdersController::class, 'restore']);
		Route::resource('orders', OrdersController::class);
		Route::get('orders/{orderID}/cancel', [OrdersController::class, 'cancel']);
		Route::put('orders/cancel/{orderID}', [OrdersController::class, 'doCancel']);
		Route::post('orders/complete/{orderID}', [OrdersController::class, 'doComplete']);

		Route::resource('shipments', ShipmentController::class);

		Route::resource('slides', SlideController::class);
		Route::get('slides/{slideID}/up', [SlideController::class, 'moveUp']);
		Route::get('slides/{slideID}/down', [SlideController::class, 'moveDown']);

		Route::get('reports/revenue', [ReportController::class, 'revenue']);
		Route::get('reports/product', [ReportController::class, 'product']);
		Route::get('reports/inventory', [ReportController::class, 'inventory']);
		Route::get('reports/payment', [ReportController::class, 'payment']);
		Route::get('reports/stock-in', [ReportController::class, 'stockIn']);
		Route::get('reports/stock-out', [ReportController::class, 'stockOut']);
	}
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
