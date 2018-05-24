<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/company','Backend\CompanyController@index')->name('ViewCompany');
    Route::get('/company/create','Backend\CompanyController@create')->name('CompanyForm');
    Route::post('/company/create','Backend\CompanyController@store')->name('StoreCompanyForm');
    Route::get('/company/{id}/edit','Backend\CompanyController@edit')->name('EditCompanyForm');
    Route::post('/company/{id}/edit','Backend\CompanyController@update')->name('UpdateCompanyForm');
    // Route::post('/user/{id}/delete','Backend\UserController@delete')->name('DeleteUser');
    // Route::post('/user/delete/multiple','Backend\UserController@multipleDelete')->name('MultipleDeleteUser');
});