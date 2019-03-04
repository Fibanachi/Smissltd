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
    return view('welcome');
});

Route::get('/', 'MyUserController@home')->name('home');
Route::get('/login', 'MyUserController@loginForm')->name('login');
Route::post('/login', 'MyUserController@login');
Route::get('/register', 'MyUserController@registerForm')->name('registerForm');
Route::post('/register', 'MyUserController@register');


Route::get('/first', 'MyUserController@first')->name('map');

Route::get('/google', function (){
    return view('register.google');
});
