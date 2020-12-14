<?php

namespace App\Http\Controllers;

use App\Models\Tapel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tapels=Tapel::all();
        return view('home',compact('tapels'));
    }

    public function adminHome()
    {
        return view('ppdb.user.index');
    }
}
