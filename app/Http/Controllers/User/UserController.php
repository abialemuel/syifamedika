<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;
use App\Spesialis;
use App\Pasien;
use App\Kelurahan;
use App\Kecamatan;
use App\Kabupaten;
use App\Provinsi;
use App\Agama;

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

    //return to form create pasien
    public function form_pasien()
    {
      $kelurahans = Kelurahan::all();
      $kecamatans = Kecamatan::all();
      $kabupatens = Kabupaten::all();
      $provinsis = Provinsi::all();
      $agamas = Agama::all();
      return view('user.user_register', compact('kelurahans', 'kecamatans', 'kabupatens', 'provinsis', 'agamas'));
    }

    public function store_pasien(Request $request)
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
