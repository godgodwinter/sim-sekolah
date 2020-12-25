<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyExportImportController;
use App\Http\Controllers\QrCodeGeneratorController;
use App\Http\Controllers\TapelsController;

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
// Route::resource('ppdb','App\Http\Controllers\PpdbsController');
Route::resource('/','App\Http\Controllers\PpdbsController');
Route::post('/ppdblogin/login','App\Http\Controllers\PpdbsController@postLogin');
Route::post('/ppdblogin/register','App\Http\Controllers\PpdbsController@postRegister');
// Route::get('ppdb/login','App\Http\Controllers\PpdbsController@login');
Route::get('/ppdblogin', function () {
    return view('ppdb/login');
});

Auth::routes();
//route admin
Route::group(['middleware' => ['is_admin']], function() {
    Route::delete('admin/tapel/selecteddata', [ TapelsController::class, 'deleteChecked' ])->name('tapel.deleteChecked');
    Route::resource('admin/tapel','App\Http\Controllers\TapelsController');
    Route::resource('admin/siswas','App\Http\Controllers\AdminSiswasController');
    Route::resource('admin/tagihansiswas','App\Http\Controllers\AdminTagihanSiswaController')->except([
        'index'
    ]);

    Route::resource('admin/kelass','App\Http\Controllers\AdminKelassController');
    Route::resource('admin/aturtagihans','App\Http\Controllers\AdminTagihanAturController');
    // Route::resource('admin/tagihan_aturs','App\Http\Controllers\tagihan_atursController');
    Route::get('admin/tagihansiswas', [App\Http\Controllers\AdminTagihanSiswaController::class, 'index'])->name('tagihansiswa.index')->middleware('is_admin');
    Route::get('admin/tagihansiswas/{tapel}/{kelas}', [App\Http\Controllers\AdminTagihanSiswaController::class, 'cari'])->name('tagihansiswa.cari')->middleware('is_admin');
    Route::get('admin/ppdb_user', [App\Http\Controllers\AdminPpdbUserController::class, 'index'])->name('admin_ppdb_user')->middleware('is_admin');

    Route::post('home', [ App\Http\Controllers\HomeController::class, 'index' ])->name('admin.home')->middleware('is_admin');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_admin');
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_admin');
    // Route::get('admin/tapel/selecteddata', [App\Http\Controllers\TapelsController::class, 'deleteChecked'])->name('tapel.deleteChecked')


});

//route is_ppdb (ppdbuser) yang register pendaftaran siswa baru
Route::group(['middleware' => ['is_ppdb']], function() {

Route::get('/ppdbuser_beranda', [App\Http\Controllers\PpdbUserBerandaController::class, 'index'])->name('ppdbuser_beranda');
// Route::resource('ppdbuser_beranda','App\Http\Controllers\PpdbUserBerandaController');
Route::resource('ppdbuser_ortu','App\Http\Controllers\PpdbUserIdentitasOrtuController');
Route::resource('ppdbuser_identitas','App\Http\Controllers\PpdbUserIdentitasDiriController');

Route::resource('ppdbuser_rincian','App\Http\Controllers\PpdbUserIdentitasRincianController');
Route::get('ppdbuser_persetujuan/cetak','App\Http\Controllers\PpdbUserPernyataanController@cetak_pdf')->name('cetak_ppdb_siswas');

Route::resource('ppdbuser_persetujuan','App\Http\Controllers\PpdbUserPernyataanController');



Route::resource('ppdbuser_rincian','App\Http\Controllers\PpdbUserIdentitasRincianController')->except(['edit','update','delete']);
Route::resource('ppdbuser_persetujuan','App\Http\Controllers\PpdbUserPernyataanController');

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
Route::get('/admin_ppdb_user/export', [ MyExportImportController::class, 'export_ppdb_siswas' ])->name('export_ppdb_siswas');
Route::post('/admin_ppdb_user/import', [ MyExportImportController::class, 'import_ppdb_siswas' ])->name('import_ppdb_siswas');

Route::resource('ppdb2','App\Http\Controllers\PpdbContohController');

Auth::routes();

//qrcode
Route::get('/qr-code', [App\Http\Controllers\QrCodeGeneratorController::class, 'index'])->name('qr.code.index');


//cetak generate

Route::get('print_data',[App\Http\Controllers\CetakDataPpdbUserController::class, 'index']);
