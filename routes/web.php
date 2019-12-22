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

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/create-job-post', 'JobPostController@create')->name('create.job');
Route::post('/store-job-post', 'JobPostController@store')->name('store.job');
Route::get('/all-job-post', 'JobPostController@alljob')->name('all.job');
Route::get('/view-job-post/{id}', 'JobPostController@viewjob')->name('view.job');
