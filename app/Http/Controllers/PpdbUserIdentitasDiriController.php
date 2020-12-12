<?php

namespace App\Http\Controllers;

use App\Models\Ppdb_siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PpdbUserIdentitasDiriController extends Controller
{
    //
    public function index()
    {
        $email=Auth::user()->email;

        $caridata = DB::table('ppdb_siswas')
     ->where('users_email', '=', $email)
     ->count();


        //
        //  dd($caridata);
        // $ppdb_siswas=Ppdb_siswas::all();

        if($caridata>0){
            $ppdb_siswas = DB::table('ppdb_siswas')->where('users_email', $email)->first();
            // dd($ppdb_siswas);
            return view('ppdb.user.step1',compact('ppdb_siswas'))->with('caridata',$caridata);
        }else{
            return view('ppdb.user.step1')->with('caridata',$caridata);
        }

        // return view('ppdb.user.step1');
        // $branches = Branch::whereHas('user', function ($query) {

        //     $query->where('name', 'sara');

        // })->get();
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
        $caridata = DB::table('ppdb_siswas')
        ->where('users_email', '=', $email)
        ->count();
// dd($caridata);
        if($caridata>0){
//update
        $update_ppdb_siswas = DB::table('ppdb_siswas')->where('users_email', '=', $email)->update(array(
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_registrasi_akta_lahir' => $request->no_registrasi_akta_lahir,
            'agama' => $request->agama,
            'kewarganegaraan' => $request->kewarganegaraan,
            'berkebutuhankhusus' => $request->berkebutuhankhusus,
            'alamat_jalan' => $request->alamat_jalan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'nama_dusun' => $request->nama_dusun,
            'nama_kelurahan_desa' => $request->nama_kelurahan_desa,
            'kecamatan' => $request->kecamatan,
            'kodepos' => $request->kodepos,
            'tempattinggal' => $request->tempattinggal,
            'modatransportasi' => $request->modatransportasi,
            'apakahpunyakip' => $request->apakahpunyakip,
            'apakahmenerimakip' => $request->apakahmenerimakip,
            'alasanmenonakpip' => $request->alasanmenonakpip,
            'anakkeberapa' => $request->anakkeberapa,
            'telp' => $request->telp,
            'hp' => $request->hp
        ));

        return redirect('ppdbuser_identitas')->with('status','Data berhasil di tambahkan');
        }else{
            //insert
            Ppdb_siswas::create($request->all());
            return redirect('ppdbuser_identitas')->with('status','Data berhasil di tambahkan');
        }



        $request->validate([
            'nisn'=>'required',
            // 'nama'=>'required',
            // 'nik'=>'required',
            // 'no_kk'=>'required',
            // 'tempat_lahir'=>'required',
            // 'tgl_lahir'=>'required',
            // 'no_registrasi_akta_lahir'=>'required',
            // 'agama'=>'required',
            // 'kewarganegaraan'=>'required',
            // 'berkebutuhankhusus'=>'required',
            // 'alamat_jalan'=>'required',
            // 'rt'=>'required',
            // 'rw'=>'required',
            // 'nama_dusun'=>'required',
            // 'nama_kelurahan_desa'=>'required',
            // 'kecamatan'=>'required',
            // 'kodepos'=>'required',
            // 'tempattinggal'=>'required',
            // 'modatransportasi'=>'required',
            // 'apakahpunyakip'=>'required',
            // 'apakahmenerimakip'=>'required',
            // 'alasanmenonakpip'=>'required',
            // 'anakkeberapa'=>'required',
            // 'email'=>'required',
            // 'telp'=>'required',
            // 'hp'=>'required'

        ]
       );
            // dd($request);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tapel  $tapel
     * @return \Illuminate\Http\Response
     */
    public function show(Tapel $tapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tapel  $tapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Tapel $tapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tapel  $tapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tapel $tapel)
    {
        //
        // $request->validate([
        //     'nama'=>'required'
        // ],

        // [
        //     'nama.required'=>'Nama harus diisi'


        // ]);
        //  //aksi update

        // tapel::where('id',$tapel->id)
        //     ->update([
        //         'nama'=>$request->nama
        //     ]);
        //     return redirect('/tapel')->with('status','Data berhasil diupdate!');

    }
}
