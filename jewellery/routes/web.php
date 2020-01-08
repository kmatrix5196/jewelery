<?php

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
// Route for client site
Route::get('/', function () {
    return View::make('client.pages.index');
});
Route::get('/home', function () {
    return View::make('client.pages.index');
});
Route::get('/index', function () {
    return View::make('client.pages.index');
});
Route::get('/chat', function () {
    return View::make('client.pages.chat');
});
Route::get('/blog-details', function () {
    return View::make('client.pages.blog-details');
});

Route::get('/company_profile', function () {
    return View::make('client.pages.company_profile');
});
Route::get('/contact-us', function () {
    return View::make('client.pages.contact-us');
});
Route::get('/login-register', function () {
    return View::make('client.pages.login-register');
});
Route::get('/my_account', function () {
    return View::make('client.pages.my_account');
});
Route::get('/premium_show', function () {
    return View::make('client.pages.premium_show');
});
Route::get('/recover_account', function () {
    return View::make('client.pages.recover_account');
});
Route::get('/shop', function () {
    return View::make('client.pages.shop');
});
Route::get('/supplier', function () {
    return View::make('client.pages.supplier');
});
Route::get('/supplier_company', function () {
    return View::make('client.pages.supplier_company');
});
Route::get('/trade_show', function () {
    return View::make('client.pages.trade_show');
});
Route::get('/wishlist', function () {
    return View::make('client.pages.wishlist');
});



