<?php
namespace App\Imports;

use App\Models\Ppdb_siswas;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport_ppdb_siswas implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        \Log::info($row);
        return new Ppdb_siswas([
            'users_email'                      => $row['1'],
            'nama'                             => $row['2'],
            'jk'                               => $row['3'],
            'nisn'                             => $row['4'],
            'nik'                              => $row['5'],
            'no_kk'                            => $row['6'],
            'tempat_lahir'                     => $row['7'],
            'tgl_lahir'                        => $row['8'],
            'no_registrasi_akta_lahir'         => $row['9'],
            'agama'                            => $row['10'],
            'kewarganegaraan'                  => $row['11'],
            'berkebutuhankhusus'               => $row['12'],
            'alamat_jalan'                     => $row['13'],
            'rt'                               => $row['14'],
            'rw'                               => $row['15'],
            'nama_dusun'                       => $row['16'],
            'nama_kelurahan_desa'              => $row['17'],
            'kecamatan'                        => $row['18'],
            'kodepos'                          => $row['19'],
            'tempattinggal'                    => $row['20'],
            'modatransportasi'                 => $row['21'],
            'anakkeberapa'                     => $row['22'],
            'apakahpunyakip'                   => $row['23'],
            'apakahmenerimakip'                => $row['24'],
            'alasanmenonakpip'                 => $row['25'],
            'telp'                             => $row['26'],
            'hp'                               => $row['27'],
        ]);

    }
}
