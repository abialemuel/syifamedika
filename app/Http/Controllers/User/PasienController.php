<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pasien;

class PasienController extends Controller
{

    //return to form create pasien
    public function create()
    {
      return view('User.forms');
    }
    //
    public function store(Request $request)
    {
      return Pasien::create([
        'awalan' => $request['awalan'],
        'nama_pasien' => $request['nama_pasien'],
        'kartu_id' => $request['kartu_id'],
        'no_kartuid' => $request['no_kartuid'],
        'kepemilikan_id' => $request['kepemilikan_id'],
        'no_kartuid' => $request['tempat_lahir'],
        'tgl_lahir' => $request['tgl_lahir'],
        'jk' => $request['jk'],
        'gol_darah' => $request['gol_darah'],
        'alamat' => $request['alamat'],
        'kelurahan' => $request['kelurahan'],
        'kecamatan' => $request['kecamatan'],
        'kabupaten' => $request['kabupaten'],
        'provinsi' => $request['provinsi'],
        'no_telp' => $request['no_telp'],
        'email' => $request['email'],
        'agama' => $request['agama'],
        'status' => $request['status'],
        'pekerjaan' => $request['pekerjaan'],
        'tanggungan' => $request['tanggungan'],
        'kewarganegaraan' => $request['kewarganegaraan'],
        'ayahkandung' => $request['ayahkandung'],
        'ibukandung' => $request['ibukandung'],
        'pendidikanterakhir' => $request['pendidikan'],
        'no_bpjs' => $request['no_bpjs'],
        'cetakkartu' => $request['cetakkartu'],
      ]);

    }

}
