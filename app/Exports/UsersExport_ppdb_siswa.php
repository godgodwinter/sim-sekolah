<?php
namespace App\Exports;

use App\Models\Ppdb_siswas;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport_ppdb_siswa implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'No',
            'Email',
            'Nama',
            'JK',
            'NISN',
            'NIK',
            'No KK',
            'Tempat Lahir',
            'Tanggal Lahir',
            'No Registrasi Akta Lahir',
            'Agama',
            'Kewarganegaraan',
            'Berkebutuhan Khusus',
            'Alamat Jalan',
            'RT',
            'RW',
            'Nama Dusun',
            'Nama Kelurahan Desa',
            'Kecamatan',
            'Kode POS',
            'Tempat Tinggal',
            'Mode Transportasi',
            'Anak Keberapa',
            'Anak Keberapa',
            'Apakah punya KIP',
            'Apakah Menerima KIP',
            'Alasan menolak KIP',
            'Telp',
            'HP'
        ];}


    public function collection()
    {



        $ppdb_siswas2=Ppdb_siswas::all();


        return $ppdb_siswas2;
    }
}
