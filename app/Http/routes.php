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

/* Route to show logs in local environment
------------------------------------------*/
//if(App::environment('local')){
  Route::match(['get','post'],'logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
//};

/* Test
-----------------------------------------*/

Route::controller('/test','TestController');



/* Debug DB
-----------------------------------------*/
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
