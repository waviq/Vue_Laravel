<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('api/tasks', function (){
   return \App\Models\Task::latest()->get();
});
Route::post('api/tasks/ok', function (){
    $query = Request::input('query');
    $tasksBody = \App\Models\Task::where('body','LIKE',"%{$query}%")->get()->toArray();

    return response()->json([
        'body'  =>$tasksBody
    ]);

});
//Route::get('/','TaskController@index');
Route::get('/', function (){
   return view('welcome');
});