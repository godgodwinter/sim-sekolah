<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use PDF;
use QrCode;

class CetakDataPpdbUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $email=Auth::user()->email;
        $emaildecode=base64_decode($request->id);
        // dd($emaildecode);

        $caridata = DB::table('ppdb_siswas')
        ->join('ppdb_siswas_ortus', 'ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
        //->join('ppdb_siswas_rincians','ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
        ->select('ppdb_siswas.nama', 'ppdb_siswas.tempat_lahir', 'ppdb_siswas.tgl_lahir', 'ppdb_siswas.jk',
                'ppdb_siswas.agama', 'ppdb_siswas_ortu.ayah_nama','ppdb_siswas_ortu.ayah_pekerjaan',
                'ppdb_siswas.alamat','ppdb_siswas.hp','ppdb_siswas_ortu.wali_nama','ppdb_siswas_ortu.wali_pekerjaan',
                'ppdb_siswas.telp')
        ->where('ppdb_siswas.users_email', '=', $emaildecode)
        ->count();

        $pernyataan = DB::table('ppdb_siswas')
        ->join('ppdb_siswas_ortus', 'ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
        //->join('ppdb_siswas_rincians','ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
        ->select('ppdb_siswas.nama as nama', 'ppdb_siswas.tempat_lahir as tl' , 'ppdb_siswas.tgl_lahir as tgl_l',
                'ppdb_siswas.jk as jk','ppdb_siswas.agama as agama', 'ppdb_siswas_ortus.ayah_nama as ayah_n',
                'ppdb_siswas_ortus.ayah_pekerjaan as job', 'ppdb_siswas.alamat_jalan as alamat',
                'ppdb_siswas.hp as hp','ppdb_siswas_ortus.wali_nama as wali_n',
                'ppdb_siswas_ortus.wali_pekerjaan as wali_job','ppdb_siswas.telp as telp','ppdb_siswas.agama as agama')
        ->where('ppdb_siswas.users_email', '=', $emaildecode)
        ->get();

            $linkku=URL::to('/').'/print_data?id='.$request->id;
            // dd($caridata);

           if($caridata>0){

                $qrcode = base64_encode(QrCode::format('svg')->size(80)->errorCorrection('H')->generate($linkku));


                $pdf = PDF::loadview('ppdb.user.pernyataanpdf',['pernyataans'=>$pernyataan],compact('qrcode'))->setPaper('a4', 'potrait');
                return $pdf->download('lembar-pernyataan-pdf');
           }else{
            return redirect('404')->with('status','Kode Rahaisa tidak ditemukan');
           }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
