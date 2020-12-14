<?php

namespace App\Http\Controllers;

use App\Models\Ppdb_siswas_ortus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PpdbUserIdentitasOrtuController extends Controller
{
    //
    public function index()
    {
        //
        $email=Auth::user()->email;
        $caridata = DB::table('ppdb_siswas_ortus')
        ->where('users_email', '=', $email)
        ->count();

        if($caridata>0){
            $ppdb_siswas_ortus = DB::table('ppdb_siswas_ortus')->where('users_email', $email)->first();
            // dd($ppdb_siswas);
            return view('ppdb.user.step2',compact('ppdb_siswas_ortus'))->with('caridata',$caridata);
        }else{
            return view('ppdb.user.step2')->with('caridata',$caridata);
        }

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
        $caridata = DB::table('ppdb_siswas_ortus')
        ->where('users_email', '=', $email)
        ->count();
// dd($caridata);
        if($caridata>0){
//update
        $update_ppdb_siswas_ortus = DB::table('ppdb_siswas_ortus')->where('users_email', '=', $email)->update(array(
            'ayah_nama' => $request->ayah_nama,
            'ayah_nik' => $request->ayah_nik,
            'ayah_tahunlahir' => $request->ayah_tahunlahir,
            'ayah_pendidikan' => $request->ayah_pendidikan,
            'ayah_pekerjaan' => $request->ayah_pekerjaan,
            'ayah_penghasilanbulanan' => $request->ayah_penghasilanbulanan,
            'ayah_berkebutuhankhusus' => $request->ayah_berkebutuhankhusus,

            'ibu_nama' => $request->ibu_nama,
            'ibu_nik' => $request->ibu_nik,
            'ibu_tahunlahir' => $request->ibu_tahunlahir,
            'ibu_pendidikan' => $request->ibu_pendidikan,
            'ibu_pekerjaan' => $request->ibu_pekerjaan,
            'ibu_penghasilanbulanan' => $request->ibu_penghasilanbulanan,
            'ibu_berkebutuhankhusus' => $request->ibu_berkebutuhankhusus,

            'wali_nama' => $request->wali_nama,
            'wali_nik' => $request->wali_nik,
            'wali_tahunlahir' => $request->wali_tahunlahir,
            'wali_pendidikan' => $request->wali_pendidikan,
            'wali_pekerjaan' => $request->wali_pekerjaan,
            'wali_penghasilanbulanan' => $request->wali_penghasilanbulanan,
        ));

        return redirect('ppdbuser_rincian')->with('status','Data berhasil di tambahkan');
        }else{
            //insert
            Ppdb_siswas_ortus::create($request->all());
            return redirect('ppdbuser_rincian')->with('status','Data berhasil di tambahkan');
        }


    }
}
