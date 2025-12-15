<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () { return view('website.index');});

Route::get('/index', function () { return view('website.index'); });

Route::get('/about', function () {return view('website.about');});

Route::get('/blog', function () {return view('website.blog');});

Route::get('/feature', function () {return view('website.feature');});






Route::get('/team', function () {return view('website.team');});

Route::get('/testimonial', function () {return view('website.testimonial');});


//-----product page----
Route::get('/service',  [ProductController::class,'service']);
Route::get('/product/{id}', [ProductController::class,'product']);
Route::get('/single_product/{id}', [ProductController::class,'single_product']);

//---contectus---
Route::get('/contactus', [ContactController::class,'create']);
Route::post('/add_contactus', [ContactController::class,'store']);


//---login---
Route::get('/web_login',[CustomerController::class,'login'])->middleware('beforelogin_u');
Route::post('/auth_login', [CustomerController::class,'auth_login'])->middleware('beforelogin_u');
Route::get('/web_logout',[CustomerController ::class,'web_logout']);

//-siguup
Route::get('/web_signup', [CustomerController::class,'create'])->middleware('beforelogin_u');
Route::post('/web_signup', [CustomerController::class,'store'])->middleware('beforelogin_u');

//---profile---

Route::get('/my_profile', [CustomerController::class,'profile'] )->middleware('afterlogin_u');
Route::get('/edit_profile/{id}', [CustomerController::class,'edit'] )->middleware('afterlogin_u');
Route::post('/update_profile/{id}', [CustomerController::class,'update'] )->middleware('afterlogin_u');





//====================================================Admin site start====================================================================================//

Route::group(['middleware' => ['beforelogin_a']], function () {

//Admin 
Route::get('/admin-login',[AdminController::class,'index']);
Route::post('/admin_auth_login',[AdminController ::class,'admin_auth_login']);


});

Route::group(['middleware' => ['afterlogin_a']], function () {

            Route::get('/admin_logout',[AdminController ::class,'admin_logout']);


            Route::get('/dashboard', function () {return view('admin.dashboard');
            });


            Route::get('/profile', [AdminController ::class,'show']);

            Route::get('/order', function () {return view('admin.manage_order');
            });

            Route::get('/feedback', function () {return view('admin.feedback');
            });


            //customer
            Route::get('/customer',[CustomerController::class, 'show']); 

            //contect
            Route::get('/contact',[ContactController::class, 'show']); 


            //product
            Route::get('/manage_product',[ProductController::class,'show']); 
            Route::get('/add_product',[ProductController::class, 'create']);
            Route::post('/product',[ProductController::class,'store']);
            Route::get('/edit_product/{id}',[ProductController::class,'edit']);
            Route::post('/update_product/{id}',[ProductController::class,'update']); 
            Route::get('/dlt_product/{id}',[ProductController::class,'destroy']); 



            //category
            Route::get('/manage_category',[CategoryController::class, 'show']);

            Route::post('/category',[CategoryController::class,'store']);
            Route::get('/add_category', [CategoryController::class,'create']);
            Route::get('/edit_category/{id}',[CategoryController::class,'edit']);
            Route::post('/update_category/{id}',[CategoryController::class,'update']); 
            Route::get('/dlt_category/{id}',[CategoryController::class,'destroy']);

});



/*
Route::get('/dashboard_2', function () {
    return view('admin.dashboard_2');
});



Route::get('/dashboard_1', function () {
    return view('admin.dashboard_1');
});




Route::get('/invoice', function () {
    return view('admin.invoice');
});


Route::get('/price', function () {
    return view('admin.price');
});

*/









