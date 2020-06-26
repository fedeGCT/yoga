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
 

Route::resource('admin/programs', 'ProgramController')->names('programs');
Route::resource('admin/routines', 'RoutineController')->names('routines');
Route::resource('admin/videos', 'VideoController')->names('videos');

Route::get('/rutinas\{slug}', 'WebController@routines')->name('routines.web');
Route::get('/clase\{slug}', 'WebController@clase')->name('clase.single');

Route::get('/','WebController@index')->name('index.web');
Route::get('programas','WebController@program')->name('program.web');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
