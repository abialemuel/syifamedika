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

// Route for users (controller)
Route::namespace('user')->group(function () {
    // Controllers Within The "App\Http\Controllers\user" Namespace
    Route::get('/forms', 'PasienController@create');
    Route::get('/blog', function () {
        return view('user.blog');
    });
});



// Route for admin (URL)
Route::prefix('private')->group(function () {
    // Route for admin (controller)
    Route::namespace('admin')->group(function () {
        // Controllers Within The "App\Http\Controllers\admin" Namespace
        Route::get('/', 'AdminController@index');
    });
    Route::get('/login', function () {
        return view('admin.login');
    });
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
