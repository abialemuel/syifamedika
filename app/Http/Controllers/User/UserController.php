<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;
use App\Spesialis;

class UserController extends Controller
{
    //
    public function index()
    {
        $dokters = Dokter::all();
        return view('user.index', compact('dokters'));
    }

    public function dokter()
    {
      $dokters = Dokter::all();
      $spesialis = Spesialis::all();
      return view('user.dokter',compact('dokters','spesialis'));
    }
}
