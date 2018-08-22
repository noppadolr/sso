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
    return view('index');
})->name('home');

Route::get('ourjob',function(){
  return view('ourjob');
})->name('ourjob');

Route::get('officeman',function(){
  return view('officeman');
})->name('officeman');

Route::get('healthoffice',function(){
  return view('healthoffice');
})->name('healthoffice');


route::get('ita',function(){
  return view('ita');
})->name('ita');

Route::get('contact',function(){
  return view('contact');
})->name('contact');

Route::get('download',function(){
  return view('download');
})->name('download');

Route::get('vision',function(){
  return view('vision');
})->name('vision');

Route::get('bossman',function(){
  return view('bossman');
})->name('bossman');

Route::get('eb1',function(){
  return view('eb1');
})->name('eb1');

Route::get('eb2',function(){
  return view('eb2');
})->name('eb2');

Route::get('eb3',function(){
  return view('eb3');
})->name('eb3');

Route::get('eb4',function(){
  return view('eb4');
})->name('eb4');

Route::get('eb5',function(){
  return view('eb5');
})->name('eb5');

Route::get('eb6',function(){
  return view('eb6');
})->name('eb6');

Route::get('eb7',function(){
  return view('eb7');
})->name('eb7');


Route::get('eb8',function(){
  return view('eb8');
})->name('eb8');

Route::get('eb9',function(){
  return view('eb9');
})->name('eb9');

Route::get('eb10',function(){
  return view('eb10');
})->name('eb10');

Route::get('eb11',function(){
  return view('eb11');
})->name('eb11');


Route::get('plan',function(){
  return view('plan');
})->name('plan');

Route::get('nofile',function(){
  return view('nofile');
})->name('nofile');

