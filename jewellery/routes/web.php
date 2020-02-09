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
    return redirect('/home');
});

Route::prefix('/home')->group(function () {
    Route::get('', function () {
        return View::make('client.pages.index');
    });
    Route::get('chat', function () {
        return View::make('client.pages.chat');
    });
    Route::get('blog-details', function () {
        return View::make('client.pages.blog-details');
    });

    Route::get('company_profile', function () {
        return View::make('client.pages.company_profile');
    });
    Route::get('contact-us', function () {
        return View::make('client.pages.contact-us');
    });
   /* Route::get('login-register', function () {
        return View::make('client.pages.login-register');
    });*/
    Route::get('my_account', function () {
        return View::make('client.pages.my_account');
    });
    Route::get('premium_show', function () {
        return View::make('client.pages.premium_show');
    });
    Route::get('recover_account', function () {
        return View::make('client.pages.recover_account');
    });

    Route::get('supplier', function () {
        return View::make('client.pages.supplier');
    });
    Route::get('supplier_company', function () {
        return View::make('client.pages.supplier_company');
    });
    Route::prefix('trade_show')->group(function () {
        Route::get('/', "Database\BlogController@view_blog");
        Route::get('/blog_detail/{id}', "Database\BlogController@view_blog_dtl")->name('blog_detail');
    });
    Route::prefix('shop')->group(function () {
        Route::get('', 'Database\ProductController@view_product');
        Route::get('/{id}','Database\ProductController@view_product_dtl');
    });
    Route::prefix('login-register')->group(function () {
        
        Route::get('', function () {
            return View::make('client.pages.login-register');
        })->name('add_user');
     
        Route::post('', "Database\UserController@add_user");
    });
});
// Routes for admin

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return View::make('admin.pages.index');
    });
    Route::get('index', function () {
        return View::make('admin.pages.index');
    });
    Route::get('home', function () {
        return View::make('admin.pages.index');
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
    Route::get('login', function () {
        return View::make('admin.pages.login');
    });
      //Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
    //Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
  //  Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    //Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::get('my_account', function () {
        return View::make('admin.pages.my_account');
    });
    Route::get('order_lists', function () {
        return View::make('admin.pages.order_lists');
    });
    Route::get('product_payment', function () {
        return View::make('admin.pages.product_payment');
    });
    Route::get('profile', function () {
        return View::make('admin.pages.profile');
    });
    Route::get('register', function () {
        return View::make('admin.pages.register');
    });
    Route::get('table-data-table', function () {
        return View::make('admin.pages.table-data-table');
    });
    Route::get('user_lists', function () {
        return View::make('admin.pages.user_lists');
    });

    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });
    Route::prefix('product')->group(function () {
        Route::get('', function () {
            return redirect()->route('view_product');
        });
        Route::get('view', 'Database\ProductController@view_product')->name('view_product');
        Route::get('view/{id}', 'Database\ProductController@view_product_dtl');
        Route::get('add', function () {
            return View::make('admin.pages.add-product');
        })->name('add_product');
        Route::post('add', "Database\ProductController@add_product");

        Route::get('edit/{id}',"Database\ProductController@edit_product");
        Route::post('edit', "Database\ProductController@update_product")->name('edit_product');

        Route::get('delete/{id}', "Database\ProductController@delete_product")->name('delete_product');
    });

    Route::prefix('blog')->group(function () {
        Route::get('', function () {
            return redirect()->route('view_blog');
        });
        Route::get('view', 'Database\BlogController@view_blog')->name('view_blog');
        // Route::get('view/{id}', 'Database\BlogController@view_blog_dtl');
        Route::get('add', function () {
            return View::make('admin.pages.add-blog');
        })->name('add_blog');
        Route::post('add', "Database\BlogController@add_blog");

        Route::get('edit/{id}',"Database\BlogController@edit_blog");
        Route::post('edit', "Database\BlogController@update_blog")->name('edit_blog');

        Route::get('delete/{id}', "Database\BlogController@delete_blog")->name('delete_blog');
    });
       
});

 Route::prefix('company')->group(function () {
         Route::get('', function () {
        return View::make('client.pages.index');
    });
       
 Route::prefix('login-register')->group(function () {
        
        Route::get('', function () {
            return View::make('company.pages.company_login-register');
        })->name('add_company');
     
        Route::post('', "Database\CompanyController@add_company");
    });


        // Route::get('view', 'Database\BlogController@view_blog')->name('view_blog');
        // Route::get('view/{id}', 'Database\BlogController@view_blog_dtl');
       // Route::get('add', function () {
         //   return View::make('admin.pages.add-blog');
        //})->name('add_blog');
        //Route::post('add', "Database\BlogController@add_blog");

        // Route::get('edit/{id}',"Database\BlogController@edit_blog");
        // Route::post('edit', "Database\BlogController@update_blog")->name('edit_blog');

        // Route::get('delete/{id}', "Database\BlogController@delete_blog")->name('delete_blog');
    });


 
    //Route::get('/writer/login', 'Auth\LoginController@showWriterLoginForm');
    //Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');
    //Route::post('/register/writer', 'Auth\RegisterController@createWriter');
    //Route::post('/login/writer', 'Auth\LoginController@writerLogin');


  
    

  //  Route::view('/home', 'home')->middleware('auth');
    //Route::view('/admin', 'admin');
    //Route::view('/writer', 'writer');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
