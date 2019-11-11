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

Route::resource('book', 'BookController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/friends','FriendController@index')->middleware('auth');

Route::get('/put-data',function(){
    session()->put(['email'=>'user@example.com']);
    return session()->get('email');
});

Route::get('/list-data',function(){
    return session()->all();
});