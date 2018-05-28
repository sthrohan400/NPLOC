<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('/trail','Backend\TrailController@index')->name('ViewTrail');
<<<<<<< HEAD
    Route::get('/trail/create','Backend\TrailController@create')->name('TrailForm');
=======
>>>>>>> 8d0555b075366451ca69c7fa69f3d817bec83215
    
});