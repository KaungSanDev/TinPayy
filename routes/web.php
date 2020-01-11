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
})->name('home');
//Rss feed route
Route::feeds();

//View All Courses
Route::get('/list/courses', 'CourseController@getList')->name('list_course');

//Get individual course
Route::get('/course/{id}' , 'CourseController@index')->name('getCourse');
//Show Editor
Route::get('/write_course', 'CourseController@create')->name('write_course');
//Storing course
Route::post('/store_course', 'CourseController@store')->name('store_course');
Route::get('/pdf/download', 'PdfController@download')->name('getPDF');
