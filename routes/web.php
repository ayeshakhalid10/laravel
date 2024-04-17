<?php

use App\Models\ShopRegister;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShopRegisterController;
use App\Http\Controllers\ShoplistController;
use App\Http\Controllers\ShopdetailController;
use App\Http\Controllers\WorkshopController;
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
});


Route::get('/signup', [SignupController::class, 'index'])->name('Signup');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('Login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/Register', [ShopRegisterController::class, 'index'])->name('Register');
Route::post('/Register', [ShopRegisterController::class, 'store']);



Route::get('/Workshoplist', [ShoplistController::class, 'index'])->name('Workshoplist');

Route::get('/HomePage', function () {
    return view('HomePage');
})->name('HomePage');

Route::get('/Modification', function () {
    return view('Modification');
})->name('Modification');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/Shopdetail/{Shopdetail}', function (ShopRegister $Shopdetail) {
    return view('Shopdetail');
})->name('Shopdetail');
Route::get('/Shopdetail', [ShopdetailController::class, 'index'])->name('Shopdetail');

Route::get('/shop/{id}/Update', [ShopRegisterController::class, 'showUpdateForm'])->name('shop.update');
Route::put('/shop/{id}/update', [ShopRegisterController::class, 'update'])->name('shop.update.submit');
Route::delete('/shop/{id}/delete', [ShopRegisterController::class, 'delete'])->name('shop.delete');

Route::get('/search', [ShopRegisterController::class, 'search'])->name('search');



