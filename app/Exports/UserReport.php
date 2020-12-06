<?php
namespace App\Exports;

use App\Models\Tapel;
use Maatwebsite\Excel\Concerns\FromCollection;

// use Maatwebsite\Excel\Excel;

class UsersExport implements FromCollection
{
    public function laporanExcel()
    {
        dd(Tapel::all());
        return Tapel::all();
    }
}
?>