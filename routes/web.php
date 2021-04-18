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

/*
|
| The Routes For The User Pages
|
*/

Route::get('/', function () {
    return view('user.index');
});
Route::get('/favourites', function () {
    return view('user.favourites');
});
Route::get('/cart', function () {
    return view('user.cart');
});
Route::get('/orders', function () {
    return view('user.orders');
});
Route::get('/laptop', function () {
    return view('user.laptop');
});
Route::get('/laptops', function () {
    return view('user.laptops');
});
Route::get('/profile', function () {
    return view('user.profile');
});


/*
|
| The Routes For The Admin Pages
|
*/





Auth::routes();
