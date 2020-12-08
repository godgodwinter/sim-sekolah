<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\ppdbuser;
use Illuminate\Http\Request;

class PpdbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ppdb.index');
    }

    //login
    public function login()
    {
        //
        return view('ppdb.login');
    }

        //
        public function postLogin(Request $request){
            // dd($request);
            return view('ppdb.login');
        }
        public function postRegister(Request $request){
            // dd($request);

          $this->validate($request,[
                'name'=>'required',
                'email'=>'required|email|unique:ppdbuser',
                // 'password'=>'required|confirmed|min:6',
                'nisn'=>'required|min:4'
            ]);
            
            ppdbuser::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> bcrypt($request->password),
                'nisn'=> $request->nisn,
            ]);
            return redirect()->back()->withErrors(['msg', 'The Message']);
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
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
