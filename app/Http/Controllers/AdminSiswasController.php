<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use App\Models\Siswas;
use App\Models\Tapel;
use Illuminate\Http\Request;

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
        $kelass=Kelass::all();
        return view('admin.tagihan_aturs.index',compact('tapels','kelass'));
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
     * @param  \App\Models\Siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function show(Siswas $siswas)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswas $siswas)
    {
        //
    }
}
