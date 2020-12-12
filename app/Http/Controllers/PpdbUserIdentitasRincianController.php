<?php

namespace App\Http\Controllers;

use App\Models\ppdb_siswas_rincians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PpdbUserIdentitasRincianController extends Controller
{
    //
    public function index()
    {
        //
           //
           $email=Auth::user()->email;
           $caridata = DB::table('ppdb_siswas_rincians')
           ->where('users_email', '=', $email)
           ->count();

           if($caridata>0){
               $ppdb_siswas_rincians = DB::table('ppdb_siswas_rincians')->where('users_email', $email)->first();
               // dd($ppdb_siswas);
               return view('ppdb.user.step3',compact('ppdb_siswas_rincians'))->with('caridata',$caridata);
           }else{
               return view('ppdb.user.step3')->with('caridata',$caridata);
           }

        // return view('ppdb.user.step3');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $email=Auth::user()->email;
        $caridata = DB::table('ppdb_siswas_rincians')
        ->where('users_email', '=', $email)
        ->count();
// dd($caridata);
        if($caridata>0){
//update
        $update_ppdb_siswas_rincians= DB::table('ppdb_siswas_rincians')->where('users_email', '=', $email)->update(array(
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
            'lingkarkepala' => $request->ayah_tahunlahir,
            'jarakkesekolah' => $request->jarakkesekolah,
            'dalamkilometer' => $request->dalamkilometer,
            'waktutempuh' => $request->waktutempuh,
            'jmlsaudarakandung' => $request->jmlsaudarakandung,

            'prestasi_jenis' => $request->prestasi_jenis,
            'prestasi_tingkat' => $request->prestasi_tingkat,
            'prestasi_nama' => $request->prestasi_nama,
            'prestasi_tahun' => $request->prestasi_tahun,
            'prestasi_penyelenggara' => $request->prestasi_penyelenggara,
            'prestasi_peringkat' => $request->prestasi_peringkat,

            'beasiswa_jenis' => $request->beasiswa_jenis,
            'beasiswa_keterangan' => $request->beasiswa_keterangan,
            'beasiswa_tahun_mulai' => $request->beasiswa_tahun_mulai,
            'beasiswa_tahun_selesai' => $request->beasiswa_tahun_selesai,
            'kesejahteraanpesertadidik_jenis' => $request->kesejahteraanpesertadidik_jenis,
            'kesejahteraanpesertadidik_nokartu' => $request->kesejahteraanpesertadidik_nokartu,
            'kesejahteraanpesertadidik_namadikartu' => $request->kesejahteraanpesertadidik_namadikartu,

            'regristrasi_kompetensikeahlian' => $request->regristrasi_kompetensikeahlian,
            'regristrasi_jenisdaftar' => $request->regristrasi_jenisdaftar,
            'regristrasi_nis' => $request->regristrasi_nis,
            'regristrasi_tglmasuk' => $request->regristrasi_tglmasuk,
            'regristrasi_sekolahasal' => $request->regristrasi_sekolahasal,
            'regristrasi_nomorpeserta_un' => $request->regristrasi_nomorpeserta_un,
            'regristrasi_noseriijazah' => $request->regristrasi_noseriijazah,
            'regristrasi_noskhun' => $request->regristrasi_noskhun,
            'regristrasi_wna_keluarkarena' => $request->regristrasi_wna_keluarkarena,
            'regristrasi_wna_tglkeluar' => $request->regristrasi_wna_tglkeluar,
            'regristrasi_wna_alasan' => $request->regristrasi_wna_alasan
        ));

        return redirect('ppdbuser_rincian')->with('status','Data berhasil di tambahkan');
        }else{
            //insert
            ppdb_siswas_rincians::create($request->all());
            return redirect('ppdbuser_rincian')->with('status','Data berhasil di tambahkan');
        }


    }
}
