<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('Member.About.About');
})->name('about');

Route::get('/product', function () {
    return view('Member.Product.Product');
})->name('product');

Route::get('/activity', function () {
    return view('Member.Activity.Activity');
})->name('activity');

Route::get('/contact', function () {
    return view('Member.Contact.Contact');
})->name('contact');

Route::get('/portal', function () {
    return view('Member.Portal.Portal');
})->name('portal');

Route::get('/myproducts', function () {
    return view('Member.Portal.MyProducts');
})->name('myproducts');

Route::get('/detail-product', function () {
    return view('Member.Portal.Detail-Product');
})->name('detail-product');
