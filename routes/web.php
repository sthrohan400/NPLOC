<?php
use Modules\RoutesServiceProvider;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Setup Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'setup'], function() { 
	Route::get('/cache-clear', function(){ 
		\Artisan::call('cache:clear');
		echo 'cache-clear complete';
	});
	Route::get('/config-cache', function(){ 
		\Artisan::call('config:cache');
		echo 'config-cache complete';
	});
	Route::get('/dump-autoload', function(){ 
		exec('composer dump-autoload');
		echo 'composer dump-autoload complete';
	});
}); 
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::get('/dashboard','Dashboard\DashboardController@index'); 
}); 






/*
|--------------------------------------------------------------------------
|Backend Login Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'go'],function(){
	Route::get('/login','LoginController@login')->name('getLogin');
	Route::post('/login','LoginController@processLogin')->name('postLogin');
	//Route::get('/register','LoginController@register');
	Route::get('/reset/password','LoginController@passwordReset');
	Route::get('/verify/otp','LoginController@oneTimePassword');
	Route::post('/verify/otp','LoginController@verifyoneTimePassword');
	Route::get('/logout','LoginController@logout');
});

$mRoutes = new RoutesServiceProvider(); 
$mRoutes->runRoutes();