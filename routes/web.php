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
})->name('user.index');

// Route for users (controller)
Route::namespace('user')->group(function () {
    // Controllers Within The "App\Http\Controllers\user" Namespace
    Route::get('/forms', 'PasienController@create');
});



// Route for admin (URL)
Route::prefix('private')->group(function () {
    // Route for admin (controller)
    Route::namespace('admin')->group(function () {
        // Controllers Within The "App\Http\Controllers\admin" Namespace
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/login', 'auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'auth\AdminLoginController@login')->name('admin.login.submit');
    });
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
