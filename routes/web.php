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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'Composer\PagesController@home');

Route::get('/biography', 'Composer\PagesController@bio');

Route::get('/recordings', 'Composer\PagesController@recordings');

Route::get('/scores', 'Composer\PagesController@compositions');

//Route::get('/audio', 'Composer\PagesController@audio');

Route::get('/reviews', 'Composer\PagesController@reviews');

Route::get('/contact', 'Composer\PagesController@contact');

Route::get('/api_test', function(){
  return App\Composition::all();
});

// Begin: dashboard routes

Route::resource('comps', 'Composer\CompositionsController');

Route::resource('comps/{comp}/atracks', 'Composer\AudiotracksController');

Route::resource('atracks/{track}/adetails', 'Composer\AudiodetailsController')
->except([
  'index', 'show'
]);


Auth::routes(['verify'=>true]);

Route::get('/dashboard', 'DashboardController@index')
->name('dashboard')
->middleware('verified');
