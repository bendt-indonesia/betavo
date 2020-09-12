<?php

Route::get('/', 'ComproController@showIndex');
Route::get('/kategori', 'ComproController@showCategory');
Route::get('/produk', 'ComproController@showProductDetail');
Route::get('/cari', 'ComproController@search');
Route::post('/kirimpesan', 'ClientMessageController@saveMessage');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('kategori','KategoriController')->only([
        'index', 'store', 'update', 'delete'
    ]);
    Route::resource('subkategori','SubKategoriController')->only([
        'index', 'store', 'update', 'delete'
    ]);
    Route::resource('produk','ProdukController')->only([
        'index', 'store', 'update', 'delete'
    ]);
    Route::resource('info','InformasiController')->only([
        'index', 'store', 'update', 'delete'
    ]);
    Route::resource('credential','AdminController')->only([
        'index', 'update'
    ]);
    Route::get('message','ClientMessageController@viewMessage');
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/deleteprodukimage','ProdukController@removeImage')->name('delete-produk-image');
});

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', [
    'middleware'=>['recaptcha'],
    'uses' => 'ContactController@sendContactForm'
]);
