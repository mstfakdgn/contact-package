<?php

Route::group(['namespace' => 'Mustafa\FirstPackage\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index');

    Route::post('contact', 'ContactController@message')->name('contact');
});
