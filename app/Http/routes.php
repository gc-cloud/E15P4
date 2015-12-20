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


/* Authorization Routes
-----------------------*/

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');


/* Edit and create routes -  available only to logged in Users with
contribute roles
---------------------------------------------------------------*/
Route::group(['middleware' => 'contribute'], function() {
    Route::get('/articles/create', 'ArticleController@create');
    Route::post('/articles/create', 'ArticleController@store');
    Route::get('/articles/edit/search', 'ArticleController@showOwnArticles');
    Route::get('/articles/edit/{id?}', 'ArticleController@edit');
    Route::post('/articles/edit/{id?}', 'ArticleController@update');
    Route::put('/articles/edit/{id?}', 'ArticleController@destroy');
    Route::get('/articles/confirm-delete/{id?}', 'ArticleController@getConfirmDelete');
    Route::get('/articles/delete/{id?}', 'ArticleController@destroy');
    Route::get('/sources/delete/{id?}', 'SourceController@destroy');

});

/* Main Application Routes - Allow everyone to browse articles
--------------------------------------------------------------*/

Route::get('/','WelcomeController@index');
Route::get('/articles/{main_category?}','ArticleController@index');
Route::get('/articles/show/{id?}','ArticleController@show');
Route::post('/articles/comment/','CommentController@store');

/* Show logs in local environment
------------------------------------------*/
if(App::environment('local')){
  Route::match(['get','post'],'logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};
