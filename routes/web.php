<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\Slider\SliderController;
// use App\Http\Controllers\Admin\GuestMessage\GuestMessageController;
use App\Http\Controllers\Admin\Company\CompanyParameterController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Member Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('Member.About.About');
})->name('about');

Route::get('/product', function () {
    return view('Member.Product.Product');
})->name('product');

Route::get('/detail-product', function () {
    return view('Member.Product.Detail-Product');
})->name('detail-product');

Route::get('/activity', function () {
    return view('Member.Activity.Activity');
})->name('activity');

Route::get('/contact', function () {
    return view('Member.Contact.Contact');
})->name('contact');

// Portal Routes
Route::get('/portal', function () {
    return view('Member.Portal.Portal');
})->name('portal');

Route::get('/myproducts', function () {
    return view('Member.Portal.MyProducts');
})->name('myproducts');

Route::get('/product-member', function () {
    return view('Member.Portal.ProductMember');
})->name('product-member');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::resource('sliders', SliderController::class);
    // Route::post('/guest/message', [GuestMessageController::class, 'store'])->name('guest.store');
    Route::resource('companies', CompanyParameterController::class);
});

