<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskApiController;

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
    dd(1);
});

$router->post('task', 'App\Http\Controllers\TaskApiController@createTask');
$router->post('login', 'App\Http\Controllers\TaskApiController@login');
$router->get('allTasks', 'App\Http\Controllers\TaskApiController@getAllTasks');
$router->get('{id}/acceptedTasks', 'App\Http\Controllers\TaskApiController@getAcceptedTasksByUserId');
$router->get('{id}/publishedTasks', 'App\Http\Controllers\TaskApiController@getPublishedTasksByUserId');
$router->get('{id}/activeTasks', 'App\Http\Controllers\TaskApiController@getActiveTasksByUserId');
