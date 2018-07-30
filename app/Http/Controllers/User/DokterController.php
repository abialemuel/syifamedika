<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;
use App\Spesialis;

class DokterController extends Controller
{
    //
    public function index()
    {
      $dokters = Dokter::all();
      $spesialis = Spesialis::all();
      return view('user.dokter',compact('dokters','spesialis'));
    }
}
