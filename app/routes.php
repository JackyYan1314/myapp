<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('as'=>'Home','uses'=>'RegisterController@Home'));

Route::get('user_account',array('as'=>'user_account','uses'=>'RegisterController@index'));
Route::get('account/{id}',array('as'=>'account','uses'=>'RegisterController@show'));
Route::get('register',array('as'=>'register','uses'=>'RegisterController@get_new'));
Route::post('register/create',array('before'=>'csrf','uses'=>'RegisterController@create'));
Route::get('register/{id}/edit',array('as'=>'register_edit','uses'=>'RegisterController@get_edit'));
Route::put('register/update',array('before'=>'csrf','uses'=>'RegisterController@putEdit'));
Route::delete('register/delete',array('before'=>'csrf','uses'=>'RegisterController@delete_user'));
Route::get('/db', function(){
	return DB::select('SELECT current_database();');
});