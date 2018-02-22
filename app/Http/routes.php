<?php
Route::get('/', function () {
   return view('weldcome1');
});

// Second Route method – Root URL with ID will match this method
Route::get('id/{id}',function($id){
  dd($id);
   echo 'ID: '.$id;
});

// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;
});
