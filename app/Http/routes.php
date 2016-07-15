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

Route::get('/@{profile}',function($profile){

return "Checking if stuff works ".$profile;

});

/*
*
*Home
*/


Route::get('/',  [
  'as' => 'home',
  'uses' => 'HomeController@index']
);

/*
*
*Authentication
*/


Route::get('/signup',[
  'as'=>'auth.signup',
  'uses'=>'AuthController@getsignup',
  'middleware'=>['guest']
]);


Route::post('/signup',[
  'uses'=>'AuthController@postsignup',
  'middleware'=>['guest']


]);


Route::get('/signin',[
  'as'=>'auth.signin',
  'uses'=>'AuthController@getsignin',
  'middleware'=>['guest']
]);


Route::post('/signin',[
  'uses'=>'AuthController@postsignin',
  'middleware'=>['guest']
]);


Route::get('/signout',[
  'as'=>'auth.signout',
  'uses'=>'AuthController@getsignout'
]);


/*
*
*Search
*/

Route::get('/search',[
  'uses'=>'SearchController@getResults',
  'as'=>'search.results'
]);
