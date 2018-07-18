<?php

namespace App\Http\Controllers\admin;

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
        return view('admin.dokter.index', compact('dokters'));
    }
    public function edit($id_dokter)
    {
        $dokters = Dokter::where('id_dokter', '=', $id_dokter)->firstOrFail();
        $spesialis = Spesialis::all();
        return view('admin.dokter.edit',compact('dokters','spesialis'));
    }
}
