<?php

namespace App\Http\Controllers;

use App\Models\ppdb_siswas_pernyataansTable;
use Illuminate\Http\Request;

class PpdbUserPernyataanController extends Controller
{
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
        //
    }
}
