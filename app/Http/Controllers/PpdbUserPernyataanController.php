<?php

namespace App\Http\Controllers;

use App\Models\ppdb_siswas_pernyataansTable;
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // ppdb_siswas_rincians::create($request->all());
//caribarang
// $products = DB::select("SELECT products.id,products.nama,products.sku,products.harga_modal
// ,products.harga_jual,product_units.nama as nama_unit,product_categories.nama as nama_category
// FROM products,product_units,product_categories
// WHERE products.product_units_id=product_units.id
//     AND products.product_categories_id=product_categories.id");

        return redirect('ppdbuser_rincian')->with('status','Data berhasil di tambahkan');
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

        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('www.google.com'));


    	$pdf = PDF::loadview('ppdb.user.pernyataanpdf',['pernyataans'=>$pernyataan],compact('qrcode'))->setPaper('legal', 'potrait');
    	return $pdf->download('lembar-pernyataan-pdf');

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
