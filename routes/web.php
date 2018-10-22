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

Route::group(['middleware' => 'role:Superadmin'], function() {
    Route::resource('roles','RolesController');
    Route::resource('users','UserController');
    Route::resource('permissions','PermissionController');
});

Route::group(['middleware' => 'role:Kasir|Admin|Superadmin'], function() {
    Route::resource('jenis-cetak', 'JenisCetakController');
    Route::resource('pelanggan', 'PelangganController');
    Route::resource('order', 'OrderController');
    Route::post('proses/order/{id}', 'OrderController@proses')->name('order.proses');
//    Route::resource('ajax', 'AjaxController');
    Route::resource('jenispaket', 'JenisPaketController');
    Route::resource('satuan', 'JenisSatuanController');
    Route::resource('promo', 'PromoController');

    // Ajax Request
    Route::post('/getPelanggan', 'AjaxController@getPelanggan')->name('ajax.pelanggan');
    Route::post('/getPermission', 'AjaxController@getPermission')->name('ajax.permission');
    Route::post('/getjenispaket', 'AjaxController@getJenisPaket')->name('ajax.getJenisPaket');
    Route::post('/getdatapaket', 'AjaxController@getDataPaket')->name('ajax.getDataPaket');
    Route::get('/getorderdata', 'AjaxController@getOrderData')->name('ajax.getOrderData');
    Route::get('/getorderdetail/{id}', 'AjaxController@getOrderDetailsData')->name('ajax.getOrderDetail');
});

Route::group(['middleware' => 'role:Cetak|Foto|Superadmin'], function() {
    Route::post('order/proses/{id}', 'OrderController@postProsesFoto')->name('order.post.prosescetak');
    Route::get('order/proses/cetak', 'OrderController@prosesCetak')->name('order.prosescetak');
    Route::get('order/proses/foto', 'OrderController@prosesFoto')->name('order.prosesfoto');
    Route::post('order/proses/foto/{id}', 'OrderController@postProsesFoto')->name('order.post.prosesfoto');
});




