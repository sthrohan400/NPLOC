<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/trail','Backend\TrailController@index')->name('ViewTrail');
    Route::get('/trail/create','Backend\TrailController@create')->name('TrailForm');
    
});