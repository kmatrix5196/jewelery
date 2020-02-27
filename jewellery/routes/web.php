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
Auth::routes();
Route::get('/login', function () {
	return redirect('/home');
})->name('home');



// Routes for client
Route::prefix('/company')->group(function () {
	Route::get('/login', 'Auth\CompanyLoginController@showCompanyLoginForm')->name('company.login');
	Route::post('/login', 'Auth\CompanyLoginController@companyLogin')->name('company.login.submit');
	Route::get('/register', 'Auth\CompanyRegisterController@showCompanyRegisterForm')->name('company.register');
	Route::post('/register', 'Auth\CompanyRegisterController@add_company')->name('add_company');
	Route::get('/logout','Auth\CompanyLoginController@logout')->name('company.logout');

	Route::get('/company_profile', 'CompanyController@profile')->name('company.profile');
	Route::post('/chat', 'CompanyController@chat')->name('company.chat');
	Route::get('/', function () {
		return redirect()->route('company.profile');
	});	
});
Route::prefix('/user')->group(function () {
	Route::get('/login', 'Auth\UserLoginController@showUserLoginForm')->name('user.login');
	Route::post('/login', 'Auth\UserLoginController@userLogin')->name('user.login.submit');
	Route::get('/register', 'Auth\UserRegisterController@showUserRegisterForm')->name('user.register');
	Route::post('/register', 'Auth\UserRegisterController@createUser')->name('user.register');
	Route::get('/logout','Auth\UserLoginController@logout')->name('user.logout');
	Route::post('/chat', 'UserController@chat')->name('user.chat');
	Route::post('/createCon', 'UserController@createcon')->name('user.createcon');
	Route::post('/createConPre', 'UserController@createconpre')->name('user.createconpre');
	Route::get('/my_account', 'UserController@profile')->name('user.profile');
	Route::get('/', function () {
		return redirect()->route('user.profile');
	});
   //
	Route::post('/add','UserController@add_to_cart')->name('add_to_cart');

});



// Routes for client site
Route::get('/', function () {
	return redirect('/home');
})->name('home');


Route::prefix('/home')->group(function () {
	/*Route::get('/', function () {
		return View::make('client.pages.index');
	});*/
	
	Route::get('wishlist','UserController@view_wishlist')->name('wishlist');

	Route::get('/', 'Database\ProductController@view_index');
	// Route::get('chat', function () {
	// 	return View::make('client.pages.chat');
	// });
	// Route::get('blog-details', function () {
	//     return View::make('client.pages.blog-details');
	// });

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
	
	Route::prefix('premium_show')->group(function(){
		Route::get('/',"Database\PremiumController@view_premium_c");
		Route::get('/detail/{id}',"Database\PremiumController@view_premium_c_dtl");
	});
	Route::get('recover_account', function () {
		return View::make('client.pages.recover_account');
	});

	Route::get('supplier',"Database\CompanyController@view_company_c");

	Route::get('supplier_company', function () {
		return View::make('client.pages.supplier_company');
	});
	Route::prefix('trade_show')->group(function () {
		Route::get('/', "Database\BlogController@view_blog");
		Route::get('/blog_detail/{id}', "Database\BlogController@view_blog_dtl")->name('blog_detail');
	});
	Route::prefix('shop')->group(function () {
		Route::get('', 'Database\ProductController@view_product');
		Route::get('view', 'Database\ProductController@view_product')->name('view_product_user');
		Route::get('/{id}','Database\ProductController@view_product_dtl');
		
		Route::get('/category/{category}','Database\ProductController@view_product_by_category');
		Route::get('/jewellery/{jewellery}','Database\ProductController@view_product_by_jewellery');
		Route::get('/add_to_wishlist/{id}','UserController@add_to_wishlist')->name('add_to_wish');
		Route::get('delete/{id}', "UserController@delete_wishlist")->name('delete_wishlist');
	});
	Route::prefix('login')->group(function () {
		Route::get('', function () {
			return View::make('client.pages.login');
		})->name('add_user');
	 
		Route::post('', "Database\UserController@add_user");
	});
});

Route::prefix('/admin')->group(function(){
	Route::get('/register', 'Auth\AdminRegisterController@showAdminRegisterForm')->name('admin.register');
	Route::post('/register', 'Auth\AdminRegisterController@createAdmin')->name('admin.register');
	Route::get('/login','Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@adminLogin')->name('admin.login.submit');
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/', function () {
		return redirect()->route('admin.home');
	});
	Route::get('index', function () {
		return redirect()->route('admin.home');
	})->name('admin.index');
	Route::get('/home','AdminController@index')->name('admin.home');
	Route::post('/chat', 'AdminController@chat')->name('admin.chat');
	// Route::get('chat', function () {
	// 	return View::make('admin.pages.chat');
	// });
	
	Route::get('company_lists', function () {
        return View::make('admin.pages.company_lists');
    });
    Route::get('company_lists',"Database\CompanyController@view_company");
    Route::get('delete/{id}', "Database\CompanyController@delete_company")->name('delete_company');
    Route::get('company_detail/{id}',"Database\CompanyController@company_detail");
    
	Route::get('edit_products', function () {
		return View::make('admin.pages.edit_products');
	});
	
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
	Route::get('table-data-table', function () {
		return View::make('admin.pages.table-data-table');
	});
	
       Route::prefix('user_lists')->group(function () {
        Route::get('', function () {
            return redirect()->route('view_users');
        });
        Route::get('view', 'Database\UserController@view_users')->name('view_users');
        Route::get('view/{id}', 'Database\UserController@view_user');
        Route::get('delete/{id}', "Database\UserController@delete_user")->name('delete_user');
    });
    Route::prefix('product')->group(function () {
        Route::get('', function () {
            return redirect()->route('view_product');
        });
        Route::get('view', 'Database\ProductController@view_product')->name('view_product');
        Route::get('view/{id}', 'Database\ProductController@view_product_dtl');
        /*Route::get('add', function () {
            //return View::make('admin.pages.add-product');
            return view('admin.pages.add-product');
        })->name('add_product');*/
        Route::get('add', "Database\ProductController@add")->name('add_product');
        Route::post('add', "Database\ProductController@add_product");

        Route::get('edit/{id}',"Database\ProductController@edit_product");
        Route::post('edit', "Database\ProductController@update_product")->name('edit_product');

        Route::get('delete/{id}', "Database\ProductController@delete_product")->name('delete_product');
    });
    Route::get('company_lists',"Database\CompanyController@view_company");
    Route::prefix('blog')->group(function () {
        Route::get('', function () {
            return redirect()->route('view_blog');
        });
        Route::get('view', 'Database\BlogController@view_blog')->name('view_blog');
        
        Route::get('add', function () {
            return View::make('admin.pages.add-blog');
        })->name('add_blog');
        Route::post('add', "Database\BlogController@add_blog");
        Route::get('view/{id}', 'Database\BlogController@view_blog_detail');
        Route::get('edit/{id}',"Database\BlogController@edit_blog");
        Route::post('edit', "Database\BlogController@update_blog")->name('edit_blog');

        Route::get('delete/{id}', "Database\BlogController@delete_blog")->name('delete_blog');
    });
       Route::prefix('premium')->group(function () {
        Route::get('', function () {
            return redirect()->route('view_premium');
        });
        Route::get('view', 'Database\PremiumController@view_premium')->name('view_premium');
        Route::get('add', function () {
            return View::make('admin.pages.add-premium');
        })->name('add_premium');
        Route::post('add', "Database\PremiumController@add_premium");
        Route::get('detail/{id}',"Database\PremiumController@premium_detail");
        Route::get('edit/{id}',"Database\PremiumController@edit_premium");
        Route::post('edit', "Database\PremiumController@update_premium")->name('update_premium');

        Route::get('delete/{id}', "Database\PremiumController@delete_premium")->name('delete_premium');
    });
       Route::prefix('writer')->group(function () {
        Route::get('', function () {
            return redirect()->route('view_writer');
        });
        Route::get('view', 'Database\WriterController@view_writer')->name('view_writer');
        Route::get('add', function () {
            return View::make('admin.pages.add-writer');
        })->name('add_writer');
        Route::post('add', "Database\WriterController@add_writer");
        Route::get('edit/{id}',"Database\WriterController@edit_writer");
        Route::post('edit', "Database\WriterController@update_writer")->name('update_writer');

        Route::get('delete/{id}', "Database\WriterController@delete_writer")->name('delete_writer');
    });
});
Route::prefix('writer')->group(function () {
	Route::get('/login','Auth\WriterLoginController@showWriterLoginForm')->name('writer.login');
	Route::post('/login','Auth\WriterLoginController@writerLogin')->name('writer.login.submit');
	Route::post('/logout','Auth\WriterLoginController@logout')->name('writers.logout');
	Route::get('/logout','Auth\WriterLoginController@logout')->name('writer.logout');
	Route::get('/home','WriterController@index')->name('writer.home');
	Route::get('/', function () {
		return redirect()->route('writer.home');
	});
	Route::get('/index', function () {
		return redirect()->route('writer.home');
	});
});



// Route::prefix('/home')->group(function () {
//     Route::get('', function () {
//         return View::make('client.pages.index');
//     });
//     Route::get('chat', function () {
//         return View::make('client.pages.chat');
//     });
//     // Route::get('blog-details', function () {
//     //     return View::make('client.pages.blog-details');
//     // });

//     Route::get('company_profile', function () {
//         return View::make('client.pages.company_profile');
//     });
//     Route::get('contact-us', function () {
//         return View::make('client.pages.contact-us');
//     });
//    /* Route::get('login-register', function () {
//         return View::make('client.pages.login-register');
//     });*/
//     Route::get('my_account', function () {
//         return View::make('client.pages.my_account');
//     });
//     Route::get('premium_show',"Database\PremiumController@view_premium_c");
//     Route::get('recover_account', function () {
//         return View::make('client.pages.recover_account');
//     });

//     Route::get('supplier', function () {
//         return View::make('client.pages.supplier');
//     });
//     Route::get('supplier_company', function () {
//         return View::make('client.pages.supplier_company');
//     });
//     Route::prefix('trade_show')->group(function () {
//         Route::get('/', "Database\BlogController@view_blog");
//         Route::get('/blog_detail/{id}', "Database\BlogController@view_blog_dtl")->name('blog_detail');
//     });
//     Route::prefix('shop')->group(function () {
//         Route::get('', 'Database\ProductController@view_product');
//         Route::get('/{id}','Database\ProductController@view_product_dtl');
//     });
//     Route::prefix('login-register')->group(function () {
        
//         Route::get('', function () {
//             return View::make('client.pages.login-register');
//         })->name('add_user');
     
//         Route::post('', "Database\UserController@add_user");
//     });
// });
// // Routes for admin


// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return View::make('admin.pages.index');
//     });    
//     Route::get('login', 'Auth\LoginController@showAdminLoginForm')->name('admin_login');
//     Route::post('login', 'Auth\LoginController@adminLogin');
//     Route::get('register', 'Auth\RegisterController@showAdminRegisterForm');
//     Route::post('register', 'Auth\RegisterController@createAdmin')->name('admin_register');
//     Route::post('logout','Auth\LoginController@adminLogout')->name('admin_logout');
//     Route::get('index', function () {
//         return View::make('admin.pages.index');
//     });
//     Route::get('home', function () {
//         return View::make('admin.pages.index');
//     });
//     Route::get('chat', function () {
//         return View::make('admin.pages.chat');
//     });
//     Route::get('company_lists', function () {
//         return View::make('admin.pages.company_lists');
//     });
//     Route::get('edit_products', function () {
//         return View::make('admin.pages.edit_products');
//     });
    
//     Route::get('my_account', function () {
//         return View::make('admin.pages.my_account');
//     });
//     Route::get('order_lists', function () {
//         return View::make('admin.pages.order_lists');
//     });
//     Route::get('product_payment', function () {
//         return View::make('admin.pages.product_payment');
//     });
//     Route::get('profile', function () {
//         return View::make('admin.pages.profile');
//     });
//     Route::get('register', function () {
//         return View::make('admin.pages.register');
//     });
//     Route::get('table-data-table', function () {
//         return View::make('admin.pages.table-data-table');
//     });
  
//        Route::prefix('user_lists')->group(function () {
//         Route::get('', function () {
//             return redirect()->route('view_users');
//         });
//         Route::get('view', 'Database\UserController@view_users')->name('view_users');
//         Route::get('view/{id}', 'Database\UserController@view_user');
       

//         Route::get('delete/{id}', "Database\UserController@delete_user")->name('delete_user');
//     });
//     Route::prefix('product')->group(function () {
//         Route::get('', function () {
//             return redirect()->route('view_product');
//         });
//         Route::get('view', 'Database\ProductController@view_product')->name('view_product');
//         Route::get('view/{id}', 'Database\ProductController@view_product_dtl');
//         Route::get('add', function () {
//             return View::make('admin.pages.add-product');
//         })->name('add_product');
//         Route::post('add', "Database\ProductController@add_product");

//         Route::get('edit/{id}',"Database\ProductController@edit_product");
//         Route::post('edit', "Database\ProductController@update_product")->name('edit_product');

//         Route::get('delete/{id}', "Database\ProductController@delete_product")->name('delete_product');
//     });
//     Route::get('company_lists',"Database\CompanyController@view_company");
//     Route::prefix('blog')->group(function () {
//         Route::get('', function () {
//             return redirect()->route('view_blog');
//         });
//         Route::get('view', 'Database\BlogController@view_blog')->name('view_blog');
//         // Route::get('view/{id}', 'Database\BlogController@view_blog_dtl');
//         Route::get('add', function () {
//             return View::make('admin.pages.add-blog');
//         })->name('add_blog');
//         Route::post('add', "Database\BlogController@add_blog");

//         Route::get('edit/{id}',"Database\BlogController@edit_blog");
//         Route::post('edit', "Database\BlogController@update_blog")->name('edit_blog');

//         Route::get('delete/{id}', "Database\BlogController@delete_blog")->name('delete_blog');
//     });
//        Route::prefix('premium')->group(function () {
//         Route::get('', function () {
//             return redirect()->route('view_premium');
//         });
//         Route::get('view', 'Database\PremiumController@view_premium')->name('view_premium');
//         Route::get('add', function () {
//             return View::make('admin.pages.add-premium');
//         })->name('add_premium');
//         Route::post('add', "Database\PremiumController@add_premium");
//         Route::get('detail/{id}',"Database\PremiumController@premium_detail");
//         Route::get('edit/{id}',"Database\PremiumController@edit_premium");
//         Route::post('edit', "Database\PremiumController@update_premium")->name('update_premium');

//         Route::get('delete/{id}', "Database\PremiumController@delete_premium")->name('delete_premium');
//     });
//        Route::prefix('writer')->group(function () {
//         Route::get('', function () {
//             return redirect()->route('view_writer');
//         });
//         Route::get('view', 'Database\WriterController@view_writer')->name('view_writer');
//         Route::get('add', function () {
//             return View::make('admin.pages.add-writer');
//         })->name('add_writer');
//         Route::post('add', "Database\WriterController@add_writer");
//         Route::get('edit/{id}',"Database\WriterController@edit_writer");
//         Route::post('edit', "Database\WriterController@update_writer")->name('update_writer');

//         Route::get('delete/{id}', "Database\WriterController@delete_writer")->name('delete_writer');
//     });
