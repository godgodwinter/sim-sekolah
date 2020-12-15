<?php

namespace App\Http\Controllers;

use App\Models\Tagihan_aturs;
use Illuminate\Http\Request;

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
        return view('admin.tagihan_aturs.index',compact('tagihan_aturs'));
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
