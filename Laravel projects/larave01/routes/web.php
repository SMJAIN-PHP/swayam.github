<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;


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

Route::get('/', function () {
    return view('website.index');
});

Route::get('/index', function () {
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/blog', function () {
    return view('website.blog');
});

Route::get('/feature', function () {
    return view('website.feature');
});

Route::get('/product', function () {
    return view('website.product');
});

Route::get('/service', function () {
    return view('website.service');
});

Route::get('/team', function () {
    return view('website.team');
});

Route::get('/testimonial', function () {
    return view('website.testimonial');
});

//---contectus---
Route::get('/contactus', [ContactController::class,'create']);
Route::post('/add_contactus', [ContactController::class,'store']);


//---login---
Route::get('/web_login',[CustomerController::class,'login']);
Route::post('/auth_login', [CustomerController::class,'auth_login']);

//-siguup
Route::get('/web_signup', [CustomerController::class,'create']);
Route::post('/web_signup', [CustomerController::class,'store']);





//====================================================Admin site start====================================================================================//

Route::get('/adminn', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/login', function () {
    return view('admin.login');
});


Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/order', function () {
    return view('admin.manage_order');
});

Route::get('/feedback', function () {
    return view('admin.feedback');
});

//customer
Route::get('/customer',[CustomerController::class, 'show']); 

//contect
Route::get('/contact',[ContactController::class, 'show']); 


//product
Route::get('/manage_product',[ProductController::class, 'show']); 

Route::get('/add_product',[ProductController::class, 'create']);


//category
Route::get('/manage_category',[CategoryController::class, 'show']);

Route::get('/add_category', [CategoryController::class,'create']);






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









