<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function(){
		#AUTH
		Route::auth();

		Route::get('/home', 'HomeController@index');
		
		#API phones
		
		Route::resource('phones', 'PhoneController');
		Route::post('phones/export',['as'=>'phones.export','uses'=>'PhoneController@export']);
		
		#Profile
		Route::get('/{profile}', 'ProfilesController@show');
		Route::get('/{profile}/edit', ['as'=>'profile.edit', 'uses'=>'ProfilesController@edit']);
		Route::post('/{profile}/update', ['as'=>'profile.update', 'uses'=>'ProfilesController@update']);
});


