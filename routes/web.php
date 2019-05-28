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

Route::get('upload', 'Controller@upload')->name('upload');
Route::post('uploadPost', 'Controller@uploadPost')->name('uploadPost');
Route::get('gallery', 'Controller@gallery')->name('gallery');
