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

use App\Http\Controllers\TodoController;

Route::get('/folders/{id}/todos', 'TodoController@index')->name('todos.index');

Route::get('/folders/{id}/todos/create', 'TodoController@create')->name('todos.create');
Route::post('/folders/{id}/todos/create', 'TodoController@store');

Route::resource('/folders', 'FolderController');

/*
Route::get('/', function () {
    return view('welcome');
});
 */
