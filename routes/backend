<?php

Route::get("", "AdminController@index")->name("backend");

Route::get('configs', 'AdminController@config')->name('backend.configs');
Route::post('configs', 'AdminController@configPost');

Route::group(['prefix' => 'account'], function() {
    Route::get('', 'AccountController@details')->name('backend.account');
    Route::post('', 'AccountController@saveDetails');
    Route::get('change_password', 'AccountController@changePassword')->name('backend.account.change-password');
    Route::post('change_password', 'AccountController@changePasswordPost');
});
