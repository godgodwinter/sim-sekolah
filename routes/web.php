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
Route::resource('tapel','App\Http\Controllers\TapelsController');
Route::resource('ppdb','App\Http\Controllers\PpdbsController');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/documentation', function () {
    return view('documentation');
});