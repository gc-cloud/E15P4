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

Route::get('/', function () {
    return view('welcome');
});

// if(App::environment('local')) {
//     Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
// };
if(App::environment('local')){
  Route::match(['get','post'],'logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};
