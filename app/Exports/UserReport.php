<?php
namespace App\Exports;

use App\Models\Tapel;
// use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Excel;

class UserReport
{
    public function laporanExcel()
    {
        return Excel::download(new Tapel, 'users.xlsx');
    }
}
?>