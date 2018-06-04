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

Auth::routes();
Route::get('insert', 'EditorController@edit');
Route::get('/editor', 'EditorController@edit')->name('edit');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('welcome', 'EditorController@log_out');
Route::post('editor','EditorController@insert');
Route::get('test', function()
{
Mail::send('Email.test', [], function ($message)
{
    $message->to('example@gmail.com', 'HisName')->subject('Welcome!');
});
});