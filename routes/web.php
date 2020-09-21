<?php

/* FrontEnd Location */

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','IndexController@index');
Route::get('/list-products','IndexController@shop')->name('list-products');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detialpro');
Route::get('/search','IndexController@getsearch')->name('search');;
///// Cart Area /////////
Route::post('/addToCart/{id}','CartController@getAddToCart')->name('addToCart');
Route::get('/shopping-cart','CartController@getCart')->name('shopping-cart');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/R_update-quantity/{id}','CartController@ReduceOneItem');
Route::get('/cart/I_update-quantity/{id}','CartController@IncreaseOneItem');
/////////////////////////
/// Simple User Login /////
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

////// User Authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount','UsersController@account');
    Route::put('/update-profile/{id}','UsersController@updateprofile');
    Route::put('/update-password/{id}','UsersController@updatepassword');
    Route::post('/submit-checkout','OrdersController@submitcheckout');
    Route::get('/review-order','UsersController@getProfile')->name('myOrder');
    Route::get('/check-out','CheckOutController@index')->name('check-out');
});
///


/* Admin Location */
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', 'AdminController@index')->name('admin_home');
    /// Setting Area
    Route::get('/settings', 'AdminController@settings');
    Route::get('/check-pwd','AdminController@chkPassword');
    Route::post('/update-pwd','AdminController@updatAdminPwd');
    /// Category Area
    Route::resource('/category','CategoryController');
    Route::get('delete-category/{id}','CategoryController@destroy');
    Route::get('/check_category_name','CategoryController@checkCateName');
    /// Products Area
    Route::resource('/product','ProductsController');
    Route::get('delete-product/{id}','ProductsController@destroy');
    Route::get('delete-image/{id}','ProductsController@deleteImage');;
    /// Product Images Gallery
    Route::resource('/image-gallery','ImagesController');
    Route::get('delete-imageGallery/{id}','ImagesController@destroy');
///
  
});
