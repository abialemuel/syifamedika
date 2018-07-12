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

Route::get('/', function () {
    return view('user.index');
});

// Route for users
Route::namespace('User')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/forms', 'PasienController@create');
});

//Route for admin
Route::prefix('private')->group(function () {
    Route::get('/', function () {
        #auth for admin redirect to login page
        if (Auth::guest())
        return Redirect::guest('private/login');
        else {
          return view('admin.index');
        }
    });
    Route::get('/login', function () {
        return view('admin.login');
    });
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
