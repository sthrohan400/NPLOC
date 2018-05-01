<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/company','Company\CompanyController@index')->name('ViewCompany');
    Route::post('/company','Company\CompanyController@store')->name('StoreCompany');
});