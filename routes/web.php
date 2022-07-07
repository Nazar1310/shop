<?php

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
$prefix = App\Http\Middleware\LocaleMiddleware::getLocale();

Route::group(['prefix' => "$prefix"], function(){
    Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');
    Route::get('/about', 'App\Http\Controllers\IndexController@about')->name('about');
    Route::get('/contact', 'App\Http\Controllers\IndexController@contact')->name('contact');
    Route::post('/contact', 'App\Http\Controllers\IndexController@contactPost');
    Route::get('/products', 'App\Http\Controllers\IndexController@products')->name('products');
    Route::get('/products/checkout', 'App\Http\Controllers\IndexController@checkout')->name('checkout');
    Route::post('/products/checkout', 'App\Http\Controllers\IndexController@checkoutPost');
    Route::get('/products/shopping-cart', 'App\Http\Controllers\IndexController@shoppingCart')->name('shopping-cart');
    Route::get('/products/product/{product}', 'App\Http\Controllers\IndexController@product')->name('product');
    Route::post('/newsletter', 'App\Http\Controllers\IndexController@newsletter')->name('newsletter');
    require __DIR__.'/auth.php';
});

