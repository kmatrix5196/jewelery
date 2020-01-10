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
// Routes for client site
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

// Routes for admin

Route::get('/admin', function () {
    return View::make('admin.pages.index');
});
Route::get('/admin/index', function () {
    return View::make('admin.pages.index');
});
Route::get('/admin/add-product', function () {
    return View::make('admin.pages.add-product');
});
Route::get('/admin/add_blogs', function () {
    return View::make('admin.pages.add_blogs');
});
Route::get('/admin/chat', function () {
    return View::make('admin.pages.chat');
});
Route::get('/admin/company_lists', function () {
    return View::make('admin.pages.company_lists');
});
Route::get('/admin/edit_products', function () {
    return View::make('admin.pages.edit_products');
});
Route::get('/admin/login', function () {
    return View::make('admin.pages.login');
});
Route::get('/admin/my_account', function () {
    return View::make('admin.pages.my_account');
});
Route::get('/admin/order_lists', function () {
    return View::make('admin.pages.order_lists');
});
Route::get('/admin/product_list', function () {
    return View::make('admin.pages.product_list');
});
Route::get('/admin/product_payment', function () {
    return View::make('admin.pages.product_payment');
});
Route::get('/admin/profile', function () {
    return View::make('admin.pages.profile');
});
Route::get('/admin/register', function () {
    return View::make('admin.pages.register');
});
Route::get('/admin/table-data-table', function () {
    return View::make('admin.pages.table-data-table');
});
Route::get('/admin/user_lists', function () {
    return View::make('admin.pages.user_lists');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
