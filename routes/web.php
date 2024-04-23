<?php

use App\Models\ShopRegister;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShopRegisterController;
use App\Http\Controllers\ShoplistController;
use App\Http\Controllers\ShopdetailController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreModController;
use App\Http\Controllers\StoreModShowController;
use App\Models\Review;
use App\Http\Controllers\ModificationController;

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

Route::get('/', function () {
    return view('HomePage');
})->name('index');

Route::get('/InteriorMod', function () {
    return view('InteriorMod');
});

Route::get('/signup', [SignupController::class, 'index'])->name('Signup');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('Login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [ShopRegisterController::class, 'index'])->name('register');
Route::post('/register', [ShopRegisterController::class, 'store']);

Route::get('/workshops', [ShoplistController::class, 'index'])->name('workshops');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/Shopdetail/{Shopdetail}', function (ShopRegister $Shopdetail) {
    $reviews = Review::all(); 
    return view('Shopdetail',["shop"=> $Shopdetail, "reviews"=> $reviews]);
})->name('Shopdetail');

Route::get('/Shopdetail', [ShopdetailController::class, 'index'])->name('ShopDetail');

Route::get('/shop/{id}/Update', [ShopRegisterController::class, 'showUpdateForm'])->name('shop.update');
Route::put('/shop/{id}/update', [ShopRegisterController::class, 'update'])->name('shop.update.submit');
Route::delete('/shop/{id}/delete', [ShopRegisterController::class, 'delete'])->name('shop.delete');

Route::get('/search', [ShopRegisterController::class, 'search'])->name('search');

Route::post('/shop/{shop}/submit-review', [ReviewController::class, 'store'])->name('submit.review');

// Route::post('/Store/show', [ModificationController::class, 'store'])->name('modification.store');

Route::controller(StoreModController::class)->group(function () {
    Route::post('/stores', 'store')->name('stores.create');
    Route::get('/stores/{store}', 'show')->name('stores.show');
    Route::get('/stores', 'index')->name('stores');
});

Route::controller(ModificationController::class)->group(function () {
    Route::post('/stores/{store}/modification', "store")->name("store.modification");
    Route::get('/modifications', 'index')->name('modifications');
    Route::get('/modifications/{type}', 'filter')->name('modifications.filter');
});