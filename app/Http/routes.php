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
    return view('home');
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

Route::get('product',function(){
    return view('product');
});

Route::get('download',function(){
    return view('download');
});

Route::get('jzjh',function(){
   return view('jzjh');
});

Route::get('login',function(){
    return view('login');
});


Route::get('register',function(){
    return view('register');
});

Route::get('join',function(){
    return view('join');
});