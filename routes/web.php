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

// Route for users (controller)
Route::namespace('user')->group(function () {
    // Controllers Within The "App\Http\Controllers\user" Namespace
    Route::get('/', 'UserController@index');
    Route::get('/dokter', 'UserController@dokter');
    Route::get('/form', 'UserController@form_pasien');
    Route::get('/infosehat', function () {
        return view('user.blogs');
    });

    Route::get('/profilrs', function () {
        return view('user.infors');
    });
    Route::get('/profilrs', function () {
        return view('user.infors');
    });
    Route::get('/rawatinap', function () {
        return view('user.fasilitaskamar');
    });
    Route::get('/layananbpjs', function () {
        return view('user.bpjs');
    });
    Route::get('/rawatjalan', function () {
        return view('user.rawat_jalan');
    });
    Route::get('/jadwalpoliklinik', function () {
        return view('user.jadwal_poli');
    });
});



// Route for admin (URL)
Route::prefix('private')->group(function () {
    // Route for admin (controller)
    Route::namespace('admin')->group(function () {
        // Controllers Within The "App\Http\Controllers\admin" Namespace
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/login', 'auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::get('/logout', 'auth\AdminLogoutController@logout')->name('admin.logout');
        Route::post('/login', 'auth\AdminLoginController@login')->name('admin.login.submit');

        Route::prefix('dokter')->group(function () {
            // Router for dokter
            Route::get('/', 'DokterController@index')->name('dokter.index');
            Route::get('/tambah', 'DokterController@create')->name('dokter.create');
            Route::post('/tambah', 'DokterController@store')->name('dokter.store');
            Route::get('/{id_dokter}/edit', 'DokterController@edit')->name('dokter.edit');
            Route::post('/{id_dokter}/edit', 'DokterController@update');
            Route::get('/{id_dokter}/hapus', 'DokterController@destroy')->name('dokter.edit');
        });
        Route::prefix('artikel')->group(function () {
            // Router for artikel
            Route::get('/', 'ArtikelController@index')->name('artikel.index');
            Route::get('/tambah', 'ArtikelController@create')->name('artikel.create');
            Route::post('/tambah', 'ArtikelController@store')->name('artikel.store');
            Route::get('/{id_artikel}/edit', 'ArtikelController@edit')->name('artikel.edit');
            Route::post('/{id_artikel}/edit', 'ArtikelController@update');
            Route::get('/{id_artikel}/hapus', 'ArtikelController@destroy')->name('artikel.edit');
        });

    });
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
