<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/facilities','Backend\FacilitiesController@index')->name('ViewFacilities');
    Route::get('/facilities/create','Backend\FacilitiesController@create')->name('FacilitiesForm');
    Route::post('/facilities/create','Backend\FacilitiesController@store')->name('StoreFacilitiesForm');
    Route::get('/facilities/{id}/edit','Backend\FacilitiesController@edit')->name('EditFacilitiesForm');
    Route::post('/facilities/{id}/edit','Backend\FacilitiesController@update')->name('UpdateFacilitiesForm');
    Route::post('/facilities/{id}/delete','Backend\FacilitiesController@delete')->name('DeleteFacilities');
    Route::post('/facilities/delete/multiple','Backend\FacilitiesController@multipleDelete')->name('MultipleDeleteFacilities');
});