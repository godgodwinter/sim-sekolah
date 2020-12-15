<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use App\Models\Tagihan_aturs;
use App\Models\Tapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AdminTagihanAturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tagihan_aturs=Tagihan_aturs::all();
        $tapels=Tapel::all();
        $kelass=Kelass::all();
        return view('admin.tagihan_aturs.index',compact('tagihan_aturs','tapels','kelass'));
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

        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);
        $rupiah=$request->rupiah;
        $exrupiah=explode(" ",$rupiah);
        $rplexrupiah=str_replace(",","",$exrupiah);
        $nominal=str_replace(".","",$rplexrupiah);
        $nominal_tagihan=$nominal[1];
        // dd($nominal[1]);
        //

        // $tapel_cari = DB::table('tapels')->where('id', $request->tapel_id)->count();

        $tapel = DB::table('tapels')->where('id', $request->tapel_id)->first();

        $tapel_nama=$tapel->nama;


        $kelas = DB::table('kelass')->where('id', $request->kelas_id)->first();

        $kelas_nama=$kelas->nama;

		// menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        //nama file baru
        $nama_file = time()."_".$file->getClientOriginalName();

      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';

      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';

      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';

      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';

      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';

                // upload file
		$file->move($tujuan_upload,$nama_file);

        Tagihan_aturs::create([
            'tapel_id' => $request->tapel_id,
            'tapel' => $tapel_nama,
            'kelas_id' => $request->kelas_id,
            'kelas' => $kelas_nama,
            'nominal_tagihan' => $nominal_tagihan,
            'user_foto' => $nama_file
        ]);


        return redirect(URL::to('/').'/admin/aturtagihans')->with('status','Data berhasil di tambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tagihan_aturs  $tagihan_aturs
     * @return \Illuminate\Http\Response
     */
    public function show(Tagihan_aturs $tagihan_aturs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tagihan_aturs  $tagihan_aturs
     * @return \Illuminate\Http\Response
     */
    public function edit(Tagihan_aturs $tagihan_aturs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tagihan_aturs  $tagihan_aturs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tagihan_aturs $tagihan_aturs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tagihan_aturs  $tagihan_aturs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tagihan_aturs $tagihan_aturs)
    {
        //
    }
}
