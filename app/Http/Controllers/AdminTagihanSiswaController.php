<?php

namespace App\Http\Controllers;

use App\Models\Admin_settings;
use App\Models\Kelass;
use App\Models\Siswas;
use App\Models\Tagihan_aturs;
use App\Models\Tapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

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
        return view('admin.tagihansiswa.index',compact('tapels','kelass','tagihan_aturs','siswas','result'));
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
}
