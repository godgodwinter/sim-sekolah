<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPpdbUserController extends Controller
{
    //
    public function index()
    {
        // $tapels=Tapel::all();
        return view('admin.ppdbuser.index');
    }
}
