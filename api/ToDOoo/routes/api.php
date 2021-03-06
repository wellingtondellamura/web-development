<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//Route::apiResource('/tasks', 'TaskController');

Route::post('/tasks', 'TaskController@store');
Route::get('/tasks/{id}', 'TaskController@show');
Route::get('/tasks', 'TaskController@index');
Route::put('/tasks/{id}', 'TaskController@update');
Route::put('/tasks/done/{id}', 'TaskController@done');
Route::delete('/tasks/{id}', 'TaskController@destroy');
