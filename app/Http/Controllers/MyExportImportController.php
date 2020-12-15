<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Exports\UsersExport_ppdb_siswa;
use App\Imports\UsersImport_ppdb_siswas;
use Maatwebsite\Excel\Facades\Excel;

class MyExportImportController extends Controller
{
   /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));

        return back();
    }

    //gae ppdb_siswas

    public function export_ppdb_siswas()
    {
        return Excel::download(new UsersExport_ppdb_siswa, 'PPDB_SISWA.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import_ppdb_siswas()
    {
        Excel::import(new UsersImport_ppdb_siswas,request()->file('file'));

        return back();
    }
}
