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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::middleware(['admin'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('admin.index');
    });

    Route::get('/dashboard/course', 'settings\CourseController@index')->name('course.index');
    Route::get('/dashboard/course/create', 'settings\CourseController@create')->name('course.create');
    Route::post('/dashboard/course/create', 'settings\CourseController@store')->name('course.store');
    Route::get('/dashboard/course/{id}/edit', 'settings\CourseController@edit')->name('course.edit');
    Route::post('/dashboard/course/{id}/update', 'settings\CourseController@update')->name('course.update');
    Route::get('/dashboard/course/{id}/delete', 'settings\CourseController@destroy')->name('course.delete');

    
});
