<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use App\Models\Siswas;
use App\Models\Tagihan_aturs;
use App\Models\Tagihan_siswas;
use App\Models\Tagihan_siswas_details;
use App\Models\Tapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AdminSiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tapels=Tapel::all();
        $tagihan_aturs=Tagihan_aturs::all();
        $kelass=Kelass::all();
        $siswas=Siswas::all();

        // $siswas = DB::table('siswas,tapels')
        //     ->select(' * ')
        //     ->where('siswas.tapels_id', '=', 'tapels.id')
        //     ->get();
        return view('admin.siswas.index',compact('tapels','kelass','tagihan_aturs','siswas'));
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
        // dd($request->tapel_id);
        $request->validate([
            'usernamex'=>'required|max:255|unique:siswas',
            'nama'=>'required|max:255',
            'users_email' => 'required|unique:siswas|email|max:255',
            'moodle_user'=>'required|max:255',
            'moodle_pass'=>'required|max:255',
        ],
        [
            'usernamex.required'=>'NISN harus diisi',
            'nama.required'=>'Nama harus diisi',
            'users_email.unique'=>'Email telah digunakan',


        ]);

        $passwordx=12345;
        $tipe='siswa';

        $tapel = DB::table('tapels')->where('id', $request->tapel_id)->first();

        $tapel_nama=$tapel->nama;


        $kelas = DB::table('kelass')->where('id', $request->kelas_id)->first();

        $kelas_nama=$kelas->nama;

        Siswas::create([
            'usernamex' => $request->usernamex,
            'users_email' => $request->users_email,
            'passwordx' => $passwordx,
            'nama' => $request->nama,
            'tipe' => $tipe,
            'tapels_id' => $request->tapel_id,
            'tapels_nama' => $tapel_nama,
            'kelas_id' => $request->kelas_id,
            'kelas_nama' => $kelas_nama,
            'moodle_user' => $request->moodle_user,
            'moodle_pass' => $request->moodle_pass
        ]);
        $lastinput = Siswas::orderBy('created_at', 'desc')->first();
// dd($lastinput->id);
        Tagihan_siswas::create([
            'username_siswa' => $lastinput->usernamex, //nis
            'nama' => $lastinput->nama,
            'tapel' => $tapel_nama,
            'kelas' => $kelas_nama,
        ]);


        return redirect(URL::to('/').'/admin/siswas')->with('status','Data berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
             // dd($id);
             $tagihan_aturs=Tagihan_aturs::all();
             $tapels=Tapel::all();
             $kelass=Kelass::all();

        $siswas=Siswas::all();

             $result  = DB::select('select * from siswas where id = ?', [$id]);
        // dd($result);
             return view('admin.siswas.edit',compact('tagihan_aturs','tapels','kelass','result','siswas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswas $siswas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswas $siswas)
    {
        $request->validate([
            'usernamex'=>'required|max:255',
            'nama'=>'required|max:255',
            'users_email' => 'required|email|max:255',
            'moodle_user'=>'required|max:255',
            'moodle_pass'=>'required|max:255',
        ],
        [
            'usernamex.required'=>'NISN harus diisi',
            'nama.required'=>'Nama harus diisi',
            'users_email.unique'=>'Email telah digunakan',


        ]);
        //
        // dd($request->usernamex);

        $tapel = DB::table('tapels')->where('id', $request->tapel_id)->first();

        $tapel_nama=$tapel->nama;


        $kelas = DB::table('kelass')->where('id', $request->kelas_id)->first();

        $kelas_nama=$kelas->nama;

        // dd($request->id);
//jalankan update
Siswas::where('id',$request->id)
->update([
    'usernamex'=>$request->usernamex,
    'users_email'=>$request->users_email,
    'nama'=>$request->nama,
    'tapels_id'=>$request->tapel_id,
    'tapels_nama'=>$tapel_nama,
    'kelas_id'=>$request->kelas_id,
    'kelas_nama'=>$kelas_nama,
    'moodle_user'=>$request->moodle_user,
    'moodle_pass'=>$request->moodle_pass
]);
return redirect(URL::to('/').'/admin/siswas')->with('status','Data berhasil di di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd($id);
        Siswas::destroy($id);
        return redirect(URL::to('/').'/admin/siswas')->with('status','Data berhasil dihapus!');
    }
}
