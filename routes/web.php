<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminPagesController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

//Route::get('/user', [UserController::class, 'index']);

/*
|
| The Routes For The User Pages
|
*/

Route::get('/', [LaptopController::class, 'home']); // Application Home Page
Route::get('/about-us', function () { return view('user.about-us'); });
Route::get('/orders-policy', function () { return view('user.orders-policy'); });
Route::get('/favourites', [FavouriteController::class, 'index']); // User Favuorites List
Route::get('/cart', [CartController::class, 'index']); // User Cart Items List 
Route::get('/laptops', [LaptopController::class, 'index']);
Route::get('/laptops/{laptop}/{name}', [LaptopController::class, 'show']);
Route::get('/orders', [OrderController::class, 'index']); // User Orders History List

Route::group(['middleware' => 'auth'], function () {
    


    Route::get('/profile', [UserController::class, 'showUser']); // Show User Profile
    Route::put('/profile', [UserController::class, 'update']); // Update User Profile Data
    Route::put('/profile/image', [UserController::class, 'updateImage']); // Update User Profile Image
    Route::delete('/profile', [UserController::class, 'destroy']); // Delete The User Account



    Route::post('/cart', [CartController::class, 'store']); // Add Laptop To The User Cart
    Route::delete('/cart/{cart}', [CartController::class, 'destroy']); // Remove Laptop From User Cart



    Route::post('/favourites', [FavouriteController::class, 'store']); // Add Laptop To The User Favuorites List
    Route::delete('/favourites/{favourite}', [FavouriteController::class, 'destroy']); // Remove Laptop From User Favuorites List


    
    Route::post('/orders', [OrderController::class, 'store']); // Add New Order

});

/*
|
| The Routes For The Admin Pages
|
*/

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'IsAdmin']], function () { // Add The IsAdmin MiddleWare
    


    Route::get('/', [AdminPagesController::class, 'dashboard']); // Show Admin Dashboard Page
    Route::get('/price', [AdminPagesController::class, 'currency']); // Show Admin Currency Page
    Route::get('/help', [AdminPagesController::class, 'help']); // Show Admin Help Page



    Route::get('/users', [UserController::class, 'indexForAdmin']); // List All User For Admin
    Route::get('/users/{user}', [UserController::class, 'showForAdmin']); // Show Specific User Data For Admin
    Route::delete('/users/{user}', [UserController::class, 'destroy']); // Delete Specific User For Admin



    Route::get('/laptops', [LaptopController::class, 'indexForAdmin']); // Show Laptops List For Admin
    Route::get('/laptops/create', [LaptopController::class, 'create']); // Show Add New Laptop Form
    Route::get('/laptops/{laptop}', [LaptopController::class, 'showForAdmin']); // Show Specific Laptop Data For Admin
    Route::post('/laptops', [LaptopController::class, 'store']); // Add New Laptop
    Route::get('/laptops/{laptop}/edit', [LaptopController::class, 'edit']);
    Route::put('/laptops/{laptop}', [LaptopController::class, 'update']);
    Route::put('/laptops/image/{laptop}', [LaptopController::class, 'updateImage']);
    Route::delete('/laptops/{laptop}', [LaptopController::class, 'destroy']);



    Route::post('/laptops/subimages', [LaptopController::class, 'addSubImage']); // Add New Sub Image For Laptop
    Route::delete('/laptops/subimages/{subImage}', [LaptopController::class, 'deleteSubImage']); // Remove Sub Image For Laptop



    Route::get('/orders', [OrderController::class, 'indexForAdmin']); // List All Orders For Admin
    Route::get('/orders/{order}', [OrderController::class, 'show']); // Show Spevific Order Data For Admin
    Route::put('/orders/{order}', [OrderController::class, 'update']); // Update Specific Order Status



    Route::get('/categories', [CategoryController::class, 'index']); // List All Categories For Admin
    Route::get('/categories/create', [CategoryController::class, 'create']); // Show Add New Category Form
    Route::post('/categories', [CategoryController::class, 'store']); // Stort New Category
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']); // Show Edit Category Form
    Route::put('/categories/{category}', [CategoryController::class, 'update']); // Update Specific Category Data
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy']); // Delete Specific Category



    Route::get('/content', [ContentController::class, 'index']); // Show All Content Values
    Route::put('/content/{content}', [ContentController::class, 'update']); // Edit Specifi Content Value

});


Auth::routes();
