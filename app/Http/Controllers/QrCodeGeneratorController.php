<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QrCodeGeneratorController extends Controller
{
    //
    public function index()
    {
      return view('admin.tapels.tapelpdf');
    }
}
