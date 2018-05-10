<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/company','Backend\CompanyController@index')->name('ViewCompany');
    Route::post('/company','Backend\CompanyController@store')->name('StoreCompany');
});