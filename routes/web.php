<?php

use Illuminate\Support\Facades\Route;

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

   return view('homepage')->with("film", config('comics'));
});
Route::get('/single/{id}', function ($id) {
  $film = config('comics');
   return view('single')->with("comic",$film[$id] );
})->name('detail');
