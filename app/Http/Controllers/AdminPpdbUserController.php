<?php

namespace App\Http\Controllers;

use App\Models\Ppdb_siswas;
use App\Models\Tapel;
use Illuminate\Http\Request;

class AdminPpdbUserController extends Controller
{
    //
    public function index()
    {
        // $tapels=Tapel::all();
        $ppdb_siswas=Ppdb_siswas::all();
        // dd($ppdb_siswas);
        // return view('admin.tapels.index',compact('tapels'));
        return view('admin.ppdbuser.index',compact('ppdb_siswas'));
    }
}
