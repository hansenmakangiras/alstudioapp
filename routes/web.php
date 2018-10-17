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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Route::prefix('admin')->group(function() {
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
//    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
//});

Route::group(['middleware' => 'role:Superadmin|Admin'], function() {
    Route::resource('roles','RolesController');
    Route::resource('users','UserController');
    Route::resource('permissions','PermissionController');
});

Route::group(['middleware' => 'role:User|Admin|Superadmin'], function() {
    Route::resource('jenis-cetak', 'JenisCetakController');
    Route::resource('pelanggan', 'PelangganController');
    Route::resource('order', 'OrderController');
    Route::post('order/proses/{id}', 'OrderController@proses')->name('order.proses');
    Route::resource('ajax', 'AjaxController');
    Route::resource('jenispaket', 'JenisPaketController');


    // Ajax Request
    Route::post('/getPelanggan', 'AjaxController@getPelanggan')->name('ajax.pelanggan');
    Route::post('/getPermission', 'AjaxController@getPermission')->name('ajax.permission');
    Route::post('/getjenispaket', 'AjaxController@getJenisPaket')->name('ajax.getJenisPaket');
    Route::post('/getdatapaket', 'AjaxController@getDataPaket')->name('ajax.getDataPaket');
});


