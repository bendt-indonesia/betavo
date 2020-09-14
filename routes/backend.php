<?php

Route::get("", "AdminController@index")->name("backend");

Route::get('configs', 'ConfigsController@index')->name('backend.configs');
Route::post('configs', 'ConfigsController@indexPost');

Route::group(['prefix' => 'account'], function() {
    Route::get('', 'AccountController@details')->name('backend.account');
    Route::post('', 'AccountController@saveDetails');
    Route::get('change_password', 'AccountController@changePassword')->name('backend.account.change-password');
    Route::post('change_password', 'AccountController@changePasswordPost');
});

Route::resource('client_messages', 'ClientMessagesController',['as'=>'backend']);

Route::resource('produk', 'ProdukController',[
    'as'=>'backend']);

Route::resource('produk_kategori', 'ProdukKategoriController',['as'=>'backend']);

Route::resource('produk_sub_kategori', 'ProdukSubKategoriController',['as'=>'backend']);

