<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/home', function()
{
	return View::make('hello');
});

Route::filter('auth.api', function() {
	Log::info('Basic database authentication would be implemented here.');
	return;
});


Route::group(array('prefix' => 'api/v1', 'before' => 'auth.api'), function() {
	Route::resource('students', 'StudentsController');
	Route::resource('courses', 'CoursesController');
	Route::resource('grades', 'GradesController');
	Route::resource('students.courses', 'StudentsCoursesController');
	Route::resource('students.courses.grades', 'StudentsCoursesGradesController');
});
