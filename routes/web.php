<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@mainfun'
)->name('mainpage');

Route::get('brand','PageController@brandfun')->name('brandpage');

Route::get('itemdetail','PageController@itemdetailfun')->name('itemdetailpage');

Route::get('promotion','PageController@promotionfun')->name('promotionpage');

Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');
Route::get('subcategory','PageController@subcategoryfun')->name('subcategorypage');
Route::get('register','PageController@registerfun')->name('registerpage');
Route::get('loginform','PageController@loginfun')->name('loginpage');

//backend
// Route::get('dashboard', 'BackendController@dashboardfun'
// )->name('dashboardpage');

// Route::resource('items','ItemController');
Route::resource('orders','OrderController');

Route::middleware('role:Admin')->group(function(){
	Route::get('dashboard', 'BackendController@dashboardfun'
)->name('dashboardpage');

Route::resource('items','ItemController');
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubCategoryController');
Route::get('orderlists','BackendController@orderlist')->name('orderlist');
  Route::get('orderdetail/{id}','BackendController@orderdetail')->name('orderdetail');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
