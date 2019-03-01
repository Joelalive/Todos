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

Route::get('/', 'PagesController@home');

Route::get('/todos', 'TodosController@index');

Route::post('/create/todo', 'TodosController@store');

Route::get('/todos/delete/{todo}', 'TodosController@delete');

Route::get('/todos/find/{todo}', 'TodosController@find');

Route::patch('/todo/update/{todo}', 'TodosController@update');

Route::get('/todo/completed/{todo}', 'TodosController@completed');






