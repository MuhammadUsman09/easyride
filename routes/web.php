<?php



















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
     return view('driverRegistration');
    // return view('test');
   // return view('viewDrivers');

});
Route::get('login',function(){
	return view('welcome');
});
Route::post('displayDriver','maniController@getDriverData');
Route::post('maniFun','maniController@maniFun');
