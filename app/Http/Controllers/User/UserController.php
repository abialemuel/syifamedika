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
use App\Status;

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
      $statuss = Status::all();
      return view('user.user_register', compact('kelurahans', 'kecamatans', 'kabupatens', 'provinsis', 'agamas', 'statuss'));
    }

    public function form_pasien_store(Request $request)
    {
      $dt = Pasien::all()->last();
      $lastid = str_pad((ltrim($dt['id'],'0') + 1),6,"0", STR_PAD_LEFT);
      $pasien = new Pasien;
      $pasien['id_pasien'] = 111111;
      $pasien['awalan'] = $request['awalan'];
      $pasien['nama_pasien'] = $request['nama_pasien'];
      $pasien['kartu_id'] = $request['kartu_id'];
      $pasien['no_kartuid'] = $request['no_kartuid'];
      $pasien['tempat_lahir'] = $request['tempat_lahir'];
      $pasien['tgl_lahir'] = $request['tgl_lahir'];
      $pasien['jk'] = $request['jk'];
      $pasien['gol_darah'] = $request['gol_darah'];
      $pasien['alamat'] = $request['alamat'];
      $pasien['kelurahan'] = $request['kelurahan'];
      $pasien['kecamatan'] = $request['kecamatan'];
      $pasien['kabupaten'] = $request['kabupaten'];
      $pasien['provinsi'] = $request['provinsi'];
      $pasien['no_telp'] = $request['no_telp'];
      $pasien['email'] = $request['email'];
      $pasien['agama'] = $request['agama'];
      $pasien['status'] = $request['status'];
      $pasien['tanggungan'] = $request['tanggungan'];
      $pasien['kewarganegaraan'] = $request['kewarganegaraan'];
      $pasien['pekerjaan'] = $request['pekerjaan'];
      $pasien->save();
      return redirect(route('form.page'));
    }
}
