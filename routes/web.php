<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/new',[
'uses' => 'App\Http\Controllers\PagesController@new'
]);

Route::get('/todos',[
'uses' => 'App\Http\Controllers\TodosController@index',
'as' =>'todos'
]);

Route::get('/todo/Delete/{id}', [
    'uses'=> 'App\Http\Controllers\TodosController@Delete',
    'as' => 'todo.Delete'
]);


Route::get('/todo/update/{id}', [
    'uses'=> 'App\Http\Controllers\TodosController@update',
    'as' => 'todo.update'
]);

Route::post('/todo/save/{id}', [
    'uses'=> 'App\Http\Controllers\TodosController@save',
    'as' => 'todo.save'
]);

Route::post('/create/todo' ,[
    'uses'=> 'App\Http\Controllers\TodosController@Store'
])->name('todo.store');


Route::get('/todos/completed/{id}',[
    'uses'=> 'App\Http\Controllers\TodosController@completed',
    'as'=>'todos.completed'

]);
