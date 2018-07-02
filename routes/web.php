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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/local-trace', function () { return redirect('http://192.168.1.158/trace'); })->name('trace.local');
Route::get('/local-toms', function () { return redirect('http://192.168.1.158/toms'); })->name('toms.local');
Route::get('/local-vrams', function () { return redirect('http://192.168.1.158/vrams'); })->name('vrams.local');
Route::get('/local-dtr', function () { return redirect('http://192.168.1.91'); })->name('dtr.local');