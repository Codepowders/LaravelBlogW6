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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
// Second Route method – Root URL with ID will match this method
Route::get('/users/{id}',function($id){
  //dd($id);
   echo 'ID: '.$id;
});
Route::get('/users/{id}/{name}',function($id, $name){
  //dd($id);
   return 'This is user '.$name.' with id of '.$id;
});

// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;
});
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/form',function(){
   return view('form');
});
Route::resource('posts','PostsController');
