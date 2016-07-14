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
  'uses'=>'AuthController@getsignup'
]);


Route::post('/signup',[
  'uses'=>'AuthController@postsignup'
]);


Route::get('/signin',[
  'as'=>'auth.signin',
  'uses'=>'AuthController@getsignin'
]);


Route::post('/signin',[
  'uses'=>'AuthController@postsignin'
]);


Route::get('/signout',[
  'as'=>'auth.signout',
  'uses'=>'AuthController@getsignout'
]);
