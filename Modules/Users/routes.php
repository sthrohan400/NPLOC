<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/user','Backend\UserController@index')->name('ViewUser');
    Route::get('/user/create','Backend\UserController@create')->name('UserForm');
    Route::post('/user/create','Backend\UserController@store')->name('StoreUserForm');
    Route::post('/user/{id}/delete','Backend\UserController@delete')->name('DeleteUser');
    Route::post('/user/delete/multiple','Backend\UserController@multipleDelete')->name('MultipleDeleteUser');
});