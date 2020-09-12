<?php

Route::redirect('/', '/' . Loc::current(), 301);
Route::get('/lang/{locale}', 'LanguageController@setLocale')->name('setLocale');

Route::group([
    'prefix' => '{locale?}',
    'middleware' => ['web', 'locale'],
], function () {

});
