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
Auth::routes();

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', 'HomeController@index')->name('home');
// Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/students', 'StudentsController@index')->name('students');


Route::get('/classes', 'ClassesController@index')->name('classes');
Route::get('/classes/create', 'ClassesController@create')->name('class_create');
Route::get('/classes/destroy', 'ClassesController@destroy')->name('class_destroy');
Route::post('classes', 'ClassesController@store');



Route::get('/journal', 'JournalController@index')->name('journal');