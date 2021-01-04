<?php

namespace App\Http\Controllers;

use App\Models\Admin_settings;
use App\Models\Kelass;
use App\Models\Siswas;
use App\Models\Tagihan_aturs;
use App\Models\Tagihan_siswas_details;
use App\Models\Tapel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminTagihanSiswaController extends Controller
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
        $result  = DB::select('select * from admin_settings');
        // $result2  = DB::select('SELECT tagihan_siswas.id,tagihan_siswas.nama,tagihan_siswas.tapel,tagihan_siswas.kelas,tagihan_aturs.nominal_tagihan,tagihan_siswas.username_siswa FROM tagihan_siswas INNER JOIN tagihan_aturs WHERE tagihan_siswas.tapel=tagihan_aturs.tapel AND tagihan_siswas.kelas=tagihan_aturs.kelas ORDER BY tagihan_siswas.nama ASC');
        $result2  = DB::select('SELECT tagihan_siswas.id,tagihan_siswas.nama,tagihan_siswas.tapel,tagihan_siswas.kelas,tagihan_aturs.nominal_tagihan,tagihan_siswas.username_siswa FROM tagihan_siswas INNER JOIN tagihan_aturs WHERE tagihan_siswas.tapel=tagihan_aturs.tapel AND tagihan_siswas.kelas=tagihan_aturs.kelas ORDER BY tagihan_siswas.nama ASC');
        return view('admin.tagihansiswa.index',compact('tapels','kelass','tagihan_aturs','siswas','result','result2'));
    }
    public function cari($tapel,$kelas)
    {
        //
        $tapel_asli=str_replace('garing', '/', $tapel);
        // dd($tapel_asli);

        $tapels=Tapel::all();
        $tagihan_aturs=Tagihan_aturs::all();
        $kelass=Kelass::all();
        $siswas=Siswas::all();
        $result  = DB::select('select * from admin_settings');
        // $result2  = DB::select('SELECT tagihan_siswas.id,tagihan_siswas.nama,tagihan_siswas.tapel,tagihan_siswas.kelas,tagihan_aturs.nominal_tagihan,tagihan_siswas.username_siswa FROM tagihan_siswas INNER JOIN tagihan_aturs WHERE tagihan_siswas.tapel=tagihan_aturs.tapel AND tagihan_siswas.kelas=tagihan_aturs.kelas ORDER BY tagihan_siswas.nama ASC');
        $result2  = DB::select("SELECT tagihan_siswas.id,tagihan_siswas.nama,tagihan_siswas.tapel,tagihan_siswas.kelas,tagihan_aturs.nominal_tagihan,tagihan_siswas.username_siswa FROM tagihan_siswas INNER JOIN tagihan_aturs WHERE tagihan_siswas.tapel=tagihan_aturs.tapel AND tagihan_siswas.kelas=tagihan_aturs.kelas AND tagihan_siswas.tapel='$tapel_asli' AND tagihan_siswas.kelas='$kelas' ORDER BY tagihan_siswas.nama ASC");
        return view('admin.tagihansiswa.index',compact('tapels','kelass','tagihan_aturs','siswas','result','result2'));


    }

    public function edittagihansiswas($tapel,$kelas,$id)
    {
        //
        $tapel_asli=str_replace('garing', '/', $tapel);


        $result  = DB::select("SELECT * FROM tagihan_siswas WHERE username_siswa='$id' AND tapel='$tapel_asli' AND kelas='$kelas' ORDER BY tagihan_siswas.nama ASC");
        // dd($result);
        return view('admin.tagihansiswa.editbayar',compact('result'));


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
        //jalankan update
Admin_settings::where('id',$id)
->update([
    'persen'=>$request->persen
]);
return redirect(URL::to('/').'/admin/tagihansiswas')->with('status','Data berhasil di ubah!');
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

    public function bayar(Request $request)
    {
        //
        // dd($request);
        $rupiah=$request->jml_bayar;
        $exrupiah=explode(" ",$rupiah);
        $rplexrupiah=str_replace(",","",$exrupiah);
        $nominal=str_replace(".","",$rplexrupiah);
        $jml_bayar=$nominal[1];

 $tapel_encode=str_replace('/', 'garing', $request->tapel);
        Tagihan_siswas_details::create([
            'tagihan_siswas_id' => $request->tagihan_siswas_id,
            'jml_bayar' => $jml_bayar,
            'tgl_bayar' => Carbon::now()
        ]);
        return redirect(URL::to('/').'/admin/tagihansiswas/'.$tapel_encode.'/'.$request->kelas)->with('status','Data berhasil di tambahkan!');
    }

    public function pilihta(Request $request)
    {
        //
        // $result  = DB::select("select * from tagihan_aturs where id='$request->id_ta'");

        $ta_cari = DB::table('tagihan_aturs')->where('id', $request->id_ta)->count();
        $resulttacari  = DB::select("select * from tagihan_aturs where id='$request->id_ta'");
        if($ta_cari<1){
            //jika tidak ditemukan maka kembali dan kirim pesan data tidak ditemukan

            return redirect(URL::to('/').'/admin/tagihansiswas')->with('status','Data tidak ditemukan!');
        }else{
            //jika ditemukan berikan link {{ tapel }} dan kelas

            foreach ($resulttacari as $data){
                $tapel=$data->tapel;
                $kelas=$data->kelas;
            }

            $tapel_encode=str_replace('/', 'garing', $tapel);

            return redirect(URL::to('/').'/admin/tagihansiswas/'.$tapel_encode.'/'.$kelas)->with('status','Data berhasil ditemukan!');

        dd($kelas);
        }
    }
}
