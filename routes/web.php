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

Route::get('/contact', function () {
    return view('contact');
});


Route::resource('projects', 'ProjectsController');
//Route::get('/projects', 'ProjectsController@index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{id}', 'ProjectsController@show');
//Route::get('/projects/{id}/edit', 'ProjectsController@edit');
//Route::patch('/projects/{id}', 'ProjectsController@update');
//Route::delete('/projects/{id}', 'ProjectsController@destroy');

Route::post('projects/{project}/tasks','ProjectTasksController@store');
//Route::patch('/tasks/{id}','ProjectTasksController@update');

Route::post('/complete-tasks/{task}','CompleteTaskController@store');
Route::delete('/complete-tasks/{task}','CompleteTaskController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
