<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/user','Users\UsersController@index')->name('ViewUser');
    Route::post('/user','Users\UsersController@store')->name('StoreUser');
});