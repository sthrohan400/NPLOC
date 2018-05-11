<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/trail','Backend\TrailController@index')->name('ViewTrail');
    Route::post('/trail','Backend\TrailController@store')->name('StoreTrail');
});