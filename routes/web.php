<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyExportImportController;

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
Route::resource('ppdb2','App\Http\Controllers\PpdbContohController');
Route::resource('ppdbuser_beranda','App\Http\Controllers\PpdbUserBerandaController');
Route::resource('ppdbuser_ortu','App\Http\Controllers\PpdbUserIdentitasOrtuController');
Route::resource('ppdbuser_identitas','App\Http\Controllers\PpdbUserIdentitasDiriController');
Route::get('tapel', 'App\Http\Controllers\TapelsController@index');
Route::get('cetak_pdf', 'App\Http\Controllers\TapelsController@cetak_pdf');
Route::get('/excel', 'App\Http\Controllers\TapelsController@laporanExcel');
Route::get('barcode', 'App\Http\Controllers\TapelsController@barcode');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('importExportView', [ MyExportImportController::class, 'importExportView' ]);
Route::get('export', [ MyExportImportController::class, 'export' ])->name('export');
Route::post('import', [ MyExportImportController::class, 'import' ])->name('import');