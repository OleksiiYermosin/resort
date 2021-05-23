<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/page={page}', 'MyController@changePage');
Route::post('/checkForm', 'MyController@bookRoom');
Route::post('/sendMessage', 'MyController@sendMessage');
Route::post('/checkRooms', 'MyController@checkRooms');
Route::post('/deleteSingleRoom', 'MyController@deleteSingleRoom');
Route::post('/deleteAllRooms', 'MyController@deleteAllRooms');


Route::get('/adminpanel', 'AdminController@uploadAdminPage')->middleware('auth');
Route::post('/markMessage', 'AdminController@markMessages')->middleware('auth');
Route::post('/markSingleMessage', 'AdminController@markSingleMessage')->middleware('auth');

Auth::routes();

