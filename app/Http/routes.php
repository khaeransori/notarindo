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

Route::get('/yoman', function(){
	return "wazzaaappp!!";
});

Route::get('login', 'LoginController@index');

Route::group(array('prefix'=>'api'),function(){
	Route::resource('listnotaris','ListNotarisController',array('except'=>array('create','edit')));
	Route::resource('jenispekerjaan','JenisPekerjaanController',array('except'=>array('create','edit')));
});

Route::get('list', 'ListNotarisController@index');