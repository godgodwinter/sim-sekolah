<?php

namespace App\Http\Controllers;

use App\Models\ppdb_siswas_pernyataansTable;
use Illuminate\Http\Request;
use App\Models\ppdb_siswas_rincians;
use App\Models\ppdb_siswas_ortus;
use App\Models\ppdb_siswas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
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
            return redirect('ppdbuser_identitas')->with('warning','Lengkapi data terlebih dahulu');
           }

        // return view('ppdb.user.step3');
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

    public function cetak_pdf()
    {
        $email=Auth::user()->email;
        $emailencode=base64_encode($email);

        // dd($emailencode);
        $pernyataan = DB::table('ppdb_siswas')
            ->join('ppdb_siswas_ortus', 'ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
            //->join('ppdb_siswas_rincians','ppdb_siswas.users_email', '=', 'ppdb_siswas_ortus.users_email')
            ->select('ppdb_siswas.nama as nama', 'ppdb_siswas.tempat_lahir as tl' , 'ppdb_siswas.tgl_lahir as tgl_l',
                    'ppdb_siswas.jk as jk','ppdb_siswas.agama as agama', 'ppdb_siswas_ortus.ayah_nama as ayah_n',
                    'ppdb_siswas_ortus.ayah_pekerjaan as job', 'ppdb_siswas.alamat_jalan as alamat',
                    'ppdb_siswas.hp as hp','ppdb_siswas_ortus.wali_nama as wali_n',
                    'ppdb_siswas.nama_dusun as nadus','ppdb_siswas.rt as rt','ppdb_siswas.rw as rw',
                    'ppdb_siswas.nama_kelurahan_desa as keldes','ppdb_siswas.kodepos as kodpos','ppdb_siswas.kecamatan as kec',
                    'ppdb_siswas_ortus.wali_pekerjaan as wali_job','ppdb_siswas.telp as telp','ppdb_siswas.agama as agama')
            ->where('ppdb_siswas.users_email', '=', $email)
            ->get();

            $linkku=URL::to('/').'/print_data?id='.$emailencode;
        $qrcode = base64_encode(QrCode::format('svg')->size(80)->errorCorrection('H')->generate($linkku));


    	$pdf = PDF::loadview('ppdb.user.pernyataanpdf',['pernyataans'=>$pernyataan],compact('qrcode'))->setPaper('a4', 'potrait');
        return $pdf->download('lembar-persetujuansiswa_'.$email.'-.pdf');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ppdb_siswas_pernyataansTable  $ppdb_siswas_pernyataansTable
     * @return \Illuminate\Http\Response
     */
    public function show(ppdb_siswas_pernyataansTable $ppdb_siswas_pernyataansTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ppdb_siswas_pernyataansTable  $ppdb_siswas_pernyataansTable
     * @return \Illuminate\Http\Response
     */
    public function edit(ppdb_siswas_pernyataansTable $ppdb_siswas_pernyataansTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ppdb_siswas_pernyataansTable  $ppdb_siswas_pernyataansTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ppdb_siswas_pernyataansTable $ppdb_siswas_pernyataansTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ppdb_siswas_pernyataansTable  $ppdb_siswas_pernyataansTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(ppdb_siswas_pernyataansTable $ppdb_siswas_pernyataansTable)
    {

    }
}
