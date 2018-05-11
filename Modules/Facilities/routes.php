<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/facilities','Backend\FacilitiesController@index')->name('ViewFacilities');
    Route::post('/facilities','Backend\FacilitiesController@store')->name('StoreFacilities');
});