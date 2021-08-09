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


Route::get('/', 'user\FrontController@index')->name('user-front.index');
Route::get('/see-routine', 'user\FrontController@seeRoutine')->name('see-routine.index');

//Route::get('/', function () {
  //  return view('user.index');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::middleware(['admin'])->group(function () {

    Route::get('/dashboard', 'dashboard\DashboardController@index')->name('dashboard.index');
    Route::get('/dashboard/pdf', 'dashboard\DashboardController@pdf')->name('dashboard.pdf');

    //Route::get('/dashboardd', function () {
       // $sunday=Sunday::all();
       // $monday =Monday::all();
       // return view('admin.routine.routine-index', compact('sunday','monday'));
    //});

    //Course
    Route::get('/dashboard/course', 'settings\CourseController@index')->name('course.index');
    Route::get('/dashboard/course/create', 'settings\CourseController@create')->name('course.create');
    Route::post('/dashboard/course/create', 'settings\CourseController@store')->name('course.store');
    Route::get('/dashboard/course/{id}/edit', 'settings\CourseController@edit')->name('course.edit');
    Route::post('/dashboard/course/{id}/update', 'settings\CourseController@update')->name('course.update');
    Route::get('/dashboard/course/{id}/delete', 'settings\CourseController@destroy')->name('course.delete');

    //Teacher
    Route::get('/dashboard/teacher', 'settings\TeacherController@index')->name('teacher.index');
    Route::get('/dashboard/teacher/create', 'settings\TeacherController@create')->name('teacher.create');
    Route::post('/dashboard/teacher/create', 'settings\TeacherController@store')->name('teacher.store');
    Route::get('/dashboard/teacher/{id}/edit', 'settings\TeacherController@edit')->name('teacher.edit');
    Route::post('/dashboard/teacher/{id}/update', 'settings\TeacherController@update')->name('teacher.update');
    Route::get('/dashboard/teacher/{id}/delete', 'settings\TeacherController@destroy')->name('teacher.delete');

    //Room
    Route::get('/dashboard/room', 'settings\RoomController@index')->name('room.index');
    Route::get('/dashboard/room/create', 'settings\RoomController@create')->name('room.create');
    Route::post('/dashboard/room/create', 'settings\RoomController@store')->name('room.store');
    Route::get('/dashboard/room/{id}/edit', 'settings\RoomController@edit')->name('room.edit');
    Route::post('/dashboard/room/{id}/update', 'settings\RoomController@update')->name('room.update');
    Route::get('/dashboard/room/{id}/delete', 'settings\RoomController@destroy')->name('room.delete');

    //Days//Sunday
    Route::get('/dashboard/sunday', 'routine\days\SundayController@index')->name('sunday.index');
    Route::get('/dashboard/sunday/create', 'routine\days\SundayController@create')->name('sunday.create');
    Route::post('/dashboard/sunday/create', 'routine\days\SundayController@store')->name('sunday.store');
    Route::get('/dashboard/sunday/{id}/edit', 'routine\days\SundayController@edit')->name('sunday.edit');
    Route::post('/dashboard/sunday/{id}/update', 'routine\days\SundayController@update')->name('sunday.update');
    Route::get('/dashboard/sunday/{id}/delete', 'routine\days\SundayController@destroy')->name('sunday.delete');

    //Days//Monday
    Route::get('/dashboard/monday', 'routine\days\MondayController@index')->name('monday.index');
    Route::get('/dashboard/monday/create', 'routine\days\MondayController@create')->name('monday.create');
    Route::post('/dashboard/monday/create', 'routine\days\MondayController@store')->name('monday.store');
    Route::get('/dashboard/monday/{id}/edit', 'routine\days\MondayController@edit')->name('monday.edit');
    Route::post('/dashboard/monday/{id}/update', 'routine\days\MondayController@update')->name('monday.update');
    Route::get('/dashboard/monday/{id}/delete', 'routine\days\MondayController@destroy')->name('monday.delete');
    
    //Days//Tuesday
    Route::get('/dashboard/tuesday', 'routine\days\TuesdayController@index')->name('tuesday.index');
    Route::get('/dashboard/tuesday/create', 'routine\days\TuesdayController@create')->name('tuesday.create');
    Route::post('/dashboard/tuesday/create', 'routine\days\TuesdayController@store')->name('tuesday.store');
    Route::get('/dashboard/tuesday/{id}/edit', 'routine\days\TuesdayController@edit')->name('tuesday.edit');
    Route::post('/dashboard/tuesday/{id}/update', 'routine\days\TuesdayController@update')->name('tuesday.update');
    Route::get('/dashboard/tuesday/{id}/delete', 'routine\days\TuesdayController@destroy')->name('tuesday.delete');
    
    //Days//Wednesday
    Route::get('/dashboard/wednesday', 'routine\days\WednesdayController@index')->name('wednesday.index');
    Route::get('/dashboard/wednesday/create', 'routine\days\WednesdayController@create')->name('wednesday.create');
    Route::post('/dashboard/wednesday/create', 'routine\days\WednesdayController@store')->name('wednesday.store');
    Route::get('/dashboard/wednesday/{id}/edit', 'routine\days\WednesdayController@edit')->name('wednesday.edit');
    Route::post('/dashboard/wednesday/{id}/update', 'routine\days\WednesdayController@update')->name('wednesday.update');
    Route::get('/dashboard/wednesday/{id}/delete', 'routine\days\WednesdayController@destroy')->name('wednesday.delete');
    
    //Days//Thursday
    Route::get('/dashboard/thursday', 'routine\days\ThursdayController@index')->name('thursday.index');
    Route::get('/dashboard/thursday/create', 'routine\days\ThursdayController@create')->name('thursday.create');
    Route::post('/dashboard/thursday/create', 'routine\days\ThursdayController@store')->name('thursday.store');
    Route::get('/dashboard/thursday/{id}/edit', 'routine\days\ThursdayController@edit')->name('thursday.edit');
    Route::post('/dashboard/thursday/{id}/update', 'routine\days\ThursdayController@update')->name('thursday.update');
    Route::get('/dashboard/thursday/{id}/delete', 'routine\days\ThursdayController@destroy')->name('thursday.delete');
    
    //Days//Friday
    Route::get('/dashboard/friday', 'routine\days\FridayController@index')->name('friday.index');
    Route::get('/dashboard/friday/create', 'routine\days\FridayController@create')->name('friday.create');
    Route::post('/dashboard/friday/create', 'routine\days\FridayController@store')->name('friday.store');
    Route::get('/dashboard/friday/{id}/edit', 'routine\days\FridayController@edit')->name('friday.edit');
    Route::post('/dashboard/friday/{id}/update', 'routine\days\FridayController@update')->name('friday.update');
    Route::get('/dashboard/friday/{id}/delete', 'routine\days\FridayController@destroy')->name('friday.delete');
    
    //Days//Friday
    Route::get('/dashboard/saturday', 'routine\days\SaturdayController@index')->name('saturday.index');
    Route::get('/dashboard/saturday/create', 'routine\days\SaturdayController@create')->name('saturday.create');
    Route::post('/dashboard/saturday/create', 'routine\days\SaturdayController@store')->name('saturday.store');
    Route::get('/dashboard/saturday/{id}/edit', 'routine\days\SaturdayController@edit')->name('saturday.edit');
    Route::post('/dashboard/saturday/{id}/update', 'routine\days\SaturdayController@update')->name('saturday.update');
    Route::get('/dashboard/saturday/{id}/delete', 'routine\days\SaturdayController@destroy')->name('saturday.delete');
    
});

Route::get('/dashboard/routine', 'routine\RoutineController@index')->name('routine.index');
