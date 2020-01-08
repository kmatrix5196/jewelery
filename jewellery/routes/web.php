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

Route::get('/home', function () {
    return View::make('pages.index');
});
Route::get('/', function () {
    return View::make('pages.index');
});
Route::get('/chat', function () {
    return View::make('pages.chat');
});