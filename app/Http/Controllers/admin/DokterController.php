<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;


class DokterController extends Controller
{
    //
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.dokter.index', compact('dokters'));
    }
}
