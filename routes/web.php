<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyExportImportController;
use App\Http\Controllers\QrCodeGeneratorController;

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
//ppdb_luar
Route::resource('tapel','App\Http\Controllers\TapelsController');
Route::resource('ppdb','App\Http\Controllers\PpdbsController');
Route::resource('/','App\Http\Controllers\PpdbsController');
Route::post('/ppdblogin/login','App\Http\Controllers\PpdbsController@postLogin');
Route::post('/ppdblogin/register','App\Http\Controllers\PpdbsController@postRegister');
// Route::get('ppdb/login','App\Http\Controllers\PpdbsController@login');
Route::get('/ppdblogin', function () {
    return view('ppdb/login');
});

Auth::routes();

Route::post('home', [ App\Http\Controllers\HomeController::class, 'index' ])->name('admin.home')->middleware('is_admin');

Route::group(['middleware' => ['is_ppdb']], function() {

Route::get('/ppdbuser_beranda', [App\Http\Controllers\PpdbUserBerandaController::class, 'index'])->name('ppdbuser_beranda');
// Route::resource('ppdbuser_beranda','App\Http\Controllers\PpdbUserBerandaController');
Route::resource('ppdbuser_ortu','App\Http\Controllers\PpdbUserIdentitasOrtuController');
Route::resource('ppdbuser_identitas','App\Http\Controllers\PpdbUserIdentitasDiriController');
Route::resource('ppdbuser_rincian','App\Http\Controllers\PpdbUserIdentitasRincianController')->except(['edit','update','delete']);
Route::resource('ppdbuser_persetujuan','App\Http\Controllers\PpdbUserPernyataanController');

//admin/.
Route::resource('admin/ppdb_siswa','App\Http\Controllers\Ppdb_siswasController');
});

Route::get('/documentation', function () {
    return view('documentation');
});
//testing
Route::get('cetak_pdf', 'App\Http\Controllers\TapelsController@cetak_pdf');
Route::get('/excel', 'App\Http\Controllers\TapelsController@laporanExcel');
Route::get('barcode', 'App\Http\Controllers\TapelsController@barcode');

Route::get('importExportView', [ MyExportImportController::class, 'importExportView' ]);
Route::get('export', [ MyExportImportController::class, 'export' ])->name('export');
Route::post('import', [ MyExportImportController::class, 'import' ])->name('import');

Route::resource('ppdb2','App\Http\Controllers\PpdbContohController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//qrcode
Route::get('/qr-code', [App\Http\Controllers\QrCodeGeneratorController::class, 'index'])->name('qr.code.index');
