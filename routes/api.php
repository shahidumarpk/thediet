<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    //Login User Routes
    Route::post('details', 'API\UserController@details');
    Route::post('uploadAvatar', 'API\UserController@uploadAvatar')->name('uploadAvatar');
    Route::put('editProfile', 'API\UserController@editProfile')->name('editProfile');
    Route::post('changePassword', 'API\UserController@changePassword')->name('changePassword');
    //Trulies Routes
    Route::get('trulies', 'API\TrulieController@index');
    Route::post('trulies', 'API\TrulieController@store')->name('trulie.create');
    Route::get('trulie/{id}', 'API\TrulieController@show')->name('showtrulie');
    Route::get('mytrulies', 'API\TrulieController@my')->name('mytrulies');
    Route::post('react', 'API\TrulieController@react')->name('react');
    Route::post('report', 'API\TrulieController@report')->name('report');

});



