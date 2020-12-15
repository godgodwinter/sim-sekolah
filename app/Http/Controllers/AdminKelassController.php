<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AdminKelassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelass=Kelass::all();
        return view('admin.kelass.index',compact('kelass'));
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
          //
        //   dd($request);
          $request->validate([
              'nama'=>'required'

          ],
          [
              'nama.required'=>'Nama harus diisi'

          ]);
              // dd($request);
          Kelass::create($request->all());
          return redirect(URL::to('/').'/admin/kelass')->with('status','Data berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function show(Kelass $kelass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelass $kelass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelass $kelass)
    {
        //
         //
         $request->validate([
            'nama'=>'required'
        ],
        [
            'nama.required'=>'Nama harus diisi'


        ]);
         //aksi update

        Kelass::where('id',$kelass->id)
            ->update([
                'nama'=>$request->nama
            ]);

            // dd(URL::to('/').'/admin/tapel');
            return redirect(URL::to('/').'/admin/kelass')->with('status','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelass $kelass)
    {
        //

        Kelass::destroy($kelass->id);
        return redirect(URL::to('/').'/admin/kelass')->with('status','Data berhasil dihapus!');
    }
}
