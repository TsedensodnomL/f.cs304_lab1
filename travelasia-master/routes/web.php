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

Route::get('/', 'orderController@create');

// // User profile

// Route::get('/user/{username}','userController@edit');

// Route::post('/user/{username}/update', 'userController@update');


// Route::get('/{username}/order', 'userController@ordershow');

// Route::get('/{username}/order/{id}/edit', 'userController@orderedit');

// Route::get('/{username}/order/{id}/update', 'userController@orderupdate');

// Route::get('/{username}/order/{id}/delete', 'userController@orderdelete');

// // Login & Signup
// Route::get('/login', function(){
//     return view('login');
// });

// Route::get('/signup', function(){
//     return view('signup');
// });

// Route::post('signup/store', 'signupController@store');

// Route::get('login/search', 'loginController@search');


// // Travel category
// Route::resource('/admin/category', 'categoryController');

// Route::get('admin/category/create', 'categoryController@create');

// Route::post('admin/category/store', 'categoryController@store');

// Route::get('admin/category/show', 'categoryController@show');

// Route::get('admin/category/{id}/edit', 'categoryController@edit');

// Route::post('admin/category/{id}/update', 'categoryController@update');

// Route::get('admin/category/{id}/delete', 'categoryController@delete');


// // Travel location
// Route::resource('/admin/location', 'locationController');

// Route::get('admin/location/create', 'locationController@create');

// Route::post('admin/location/store', 'locationController@store');

// Route::get('admin/location/show', 'locationController@show');

// Route::get('admin/location/{id}/edit', 'locationController@edit');

// Route::post('admin/location/{id}/update', 'locationController@update');

// Route::get('admin/location/{id}/delete', 'locationController@delete');

// // Travel
// Route::resource('/admin/travel', 'travelController');

// Route::get('admin/travel/create', 'travelController@create');

// Route::post('admin/travel/store', 'travelController@store');

// Route::get('admin/travel/show', 'travelController@show');

// Route::get('admin/travel/{id}/edit', 'travelController@edit');

// Route::post('admin/travel/{id}/update', 'travelController@update');

// Route::get('admin/travel/{id}/delete', 'travelController@delete');

//Order
Route::resource('/admin/order', 'orderController');

Route::get('admin/order/create', 'orderController@create');

Route::post('admin/order/store', 'orderController@store');

Route::get('admin/order/show', 'orderController@show');

Route::get('admin/order/{id}/edit', 'orderController@edit');

Route::post('admin/order/{id}/update', 'orderController@update');

Route::get('admin/order/{id}/delete', 'orderController@delete');

Route::get('admin/order/show/{id}', 'orderController@lista');


// Route::get('/admin', function(){
//     return view('layouts.admin');
// });


// //User travel ordering
// Route::get('category/{id}', 'travelController@travel');

// Route::get('category/{cid}/{tid}', 'travelController@travelMore');

// Route::post('order/{id}', 'userController@orderstore');


// //Logout
// Route::get('/logout', 'userController@logout');

// //Admin 
// Route::get('/superior','adminController@d');

// Route::resource('/worker','adminController');

// Route::get('/adminlogin', function(){
//     return view('adminlogin');
// });

// Route::get('/adminlogin/search', 'adminController@search');

// Route::get('/admin', 'operatorController@d');

