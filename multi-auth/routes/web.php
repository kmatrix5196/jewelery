<?php
    Route::view('/', 'client.pages.index');
    Auth::routes();

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
Route::get('/cart', function () {
    return View::make('client.pages.cart');
});
Route::get('/checkout', function () {
    return View::make('client.pages.checkout');
});

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/writer', 'Auth\RegisterController@createWriter');

    Route::view('/home', 'client.pages.index')->middleware('auth');\
    Route::view('/writer', 'writer');

    Route::prefix('admin')->group(function () {

        Route::get('index', function () {
            return View::make('admin.pages.index');
        })->name('admin-home');
        Route::get('', function () {
            return View::make('admin.pages.index');
        })->name('admin-home');
        Route::get('add-product', function () {
            return View::make('admin.pages.add-product');
        });
        Route::get('add_blogs', function () {
            return View::make('admin.pages.add_blogs');
        });
        Route::get('chat', function () {
            return View::make('admin.pages.chat');
        });
        Route::get('company_lists', function () {
            return View::make('admin.pages.company_lists');
        });
        Route::get('edit_products', function () {
            return View::make('admin.pages.edit_products');
        });
        Route::get('my_account', function () {
            return View::make('admin.pages.my_account');
        });
        Route::get('order_lists', function () {
            return View::make('admin.pages.order_lists');
        });
        Route::get('product_list', function () {
            return View::make('admin.pages.product_list');
        });
        Route::get('product_payment', function () {
            return View::make('admin.pages.product_payment');
        });
        Route::get('profile', function () {
            return View::make('admin.pages.profile');
        });
        Route::get('table-data-table', function () {
            return View::make('admin.pages.table-data-table');
        });
        Route::get('user_lists', function () {
            return View::make('admin.pages.user_lists');
    });
});