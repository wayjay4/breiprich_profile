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

Route::get('/music_home', function () {
  return view('composer/music_home');
});
Route::get('/biography', function () {
  return view('composer/biography');
});
Route::get('/recordings', function () {
  return view('composer/recordings');
});
Route::get('/scores', function () {
  return view('composer/compositions');
});
Route::get('/audio', function () {
  return view('composer/audio');
});
Route::get('/reviews', function () {
  return view('composer/reviews');
});
Route::get('/contact', function () {
  return view('composer/contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
