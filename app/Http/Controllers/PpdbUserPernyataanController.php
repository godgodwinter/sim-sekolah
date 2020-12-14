<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ppdb_siswas_rincians;
use App\Models\ppdb_siswas_ortus;
use App\Models\ppdb_siswas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use QrCode;

class PpdbUserPernyataanController extends Controller
{
    public function index()
    {
        //
           //
           $email=Auth::user()->email;
           $caridata = DB::table('ppdb_siswas')
            ->join('ppdb_siswas_ortus', 'ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
            //->join('ppdb_siswas_rincians','ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
            ->select('ppdb_siswas.nama', 'ppdb_siswas.tempat_lahir', 'ppdb_siswas.tgl_lahir', 'ppdb_siswas.jk',
                    'ppdb_siswas.agama', 'ppdb_siswas_ortu.ayah_nama','ppdb_siswas_ortu.ayah_pekerjaan',
                    'ppdb_siswas.alamat','ppdb_siswas.hp','ppdb_siswas_ortu.wali_nama','ppdb_siswas_ortu.wali_pekerjaan',
                    'ppdb_siswas.telp')
            ->where('ppdb_siswas.users_email', '=', $email)
            ->count();


           if($caridata>0){
               $ppdb_siswas = DB::table('ppdb_siswas')->where('users_email', $email)->first();
               $ppdb_siswas_ortus=DB::table('ppdb_siswas_ortus');
               return view('ppdb.user.step4',compact('ppdb_siswas'))->with('caridata',$caridata);
           }else{
               return view('ppdb.user.step2')->with('caridata',$caridata);
           }

        // return view('ppdb.user.step3');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cetak_pdf()
    {
        $email=Auth::user()->email;
        $pernyataan = DB::table('ppdb_siswas')
            ->join('ppdb_siswas_ortus', 'ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
            //->join('ppdb_siswas_rincians','ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
            ->select('ppdb_siswas.nama as nama', 'ppdb_siswas.tempat_lahir as tl' , 'ppdb_siswas.tgl_lahir as tgl_l',
                    'ppdb_siswas.jk as jk','ppdb_siswas.agama as agama', 'ppdb_siswas_ortus.ayah_nama as ayah_n',
                    'ppdb_siswas_ortus.ayah_pekerjaan as job', 'ppdb_siswas.alamat_jalan as alamat',
                    'ppdb_siswas.hp as hp','ppdb_siswas_ortus.wali_nama as wali_n',
                    'ppdb_siswas_ortus.wali_pekerjaan as wali_job','ppdb_siswas.telp as telp','ppdb_siswas.agama as agama')
            ->where('ppdb_siswas.users_email', '=', $email)
            ->get();

        $qrcode = base64_encode(QrCode::format('svg')->size(80)->errorCorrection('H')->generate('www.google.com'));


    	$pdf = PDF::loadview('ppdb.user.pernyataanpdf',['pernyataans'=>$pernyataan],compact('qrcode'))->setPaper('a4', 'potrait');
    	return $pdf->download('lembar-pernyataan-pdf');
    }
}
