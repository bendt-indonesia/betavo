<?php

Route::get('/', 'ComproController@showIndex');
Route::get('/cari', 'ComproController@search');
Route::post('/kirimpesan', 'ClientMessageController@saveMessage');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', [
    'middleware'=>['recaptcha'],
    'uses' => 'ContactController@sendContactFormAJAX'
]);


Route::get('/produk2', 'ComproController@showProductDetailOld');
Route::get('/produk/{slug}', 'ComproController@showProductDetail')->name('product');
Route::get('/{cat}/{sub?}', 'ComproController@showCategory')->name('category');
