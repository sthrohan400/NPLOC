<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/company','Backend\CompanyController@index')->name('ViewCompany');
    Route::get('/company/create','Backend\CompanyController@create')->name('CompanyForm');
});