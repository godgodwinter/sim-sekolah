<?php
namespace App\Exports;

use App\Models\Ppdb_siswas;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport_ppdb_siswa implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ppdb_siswas::all();
    }
}
