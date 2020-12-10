<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PpdbUserIdentitasDiriController extends Controller
{
    //
    public function index()
    {
        //
        return view('ppdb.user.step1');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $caridata = DB::table('ppdb_siswas')
        ->where('users_email', '=', $request->email)
        ->count();
// dd($caridata);



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
        Ppdb_siswas::create($request->all());
        return redirect('ppdbuser_ortu')->with('status','Data berhasil di tambahkan');
       
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
