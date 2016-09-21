<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Admin Routes
 */
Route::get('admin/login', 'AdminAuth\AuthController@showLoginForm');
Route::post('admin/login', 'AdminAuth\AuthController@login');
Route::match(['GET', 'POST'], 'admin/logout', 'AdminAuth\AuthController@logout');

Route::get('/admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');
Route::post('/admin/password/reset','AdminAuth\PasswordController@reset');
Route::post('/admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['admin', 'history:admin']], function() {
    
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/', function(){
    	return redirect()->route('admin.dashboard');
    });

    Route::resource('admins', 'AdminController');

    Route::get('admin/admins/list', 'AdminController@list')->name('admins.list');

    /*Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/{id}', 'UserController@show')->name('users.show');

    Route::get('admin/users/list', 'UserController@list')->name('users.list');*/

});

Route::auth();

Route::get('/home', 'HomeController@index');
