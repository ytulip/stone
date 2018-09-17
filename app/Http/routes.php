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
    return view('index');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/gard', function () {
    return view('gard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('hello',function(){
	return 'hello';
});