<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;

class DokterController extends Controller
{
    //
    public function index()
    {
      $dokters = Dokter::all();
      return view('user.dokter',compact('dokters'));
    }
}
