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
use App\Klinik;
use App\Pembiayaan;
use App\Artikel;
use App\Status;
use DB;


class UserController extends Controller
{
    //
    public function index()
    {
        $dokters = Dokter::orderBy('id_dokter', 'desc')->take(5)->get();
        $kliniks = Klinik::all();
        $pembiayaans = Pembiayaan::all();
        return view('user.index', compact('dokters','kliniks','pembiayaans'));
    }

    public function dokter()
    {
      $dokters = Dokter::all();
      $spesialis = Spesialis::all();
      return view('user.dokter',compact('dokters','spesialis'));
    }

    public function infosehat()
    {
      $artikels = Artikel::all();
      return view('user.infosehat',compact('artikels'));
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
      $dt = DB::table('dm_pasien')->orderBy('id_pasien', 'desc')->first();
      $trim = (int)(ltrim($dt->id_pasien,'0')) + 1;
      $lastid = str_pad($trim,6,"0", STR_PAD_LEFT);
      $pasien = new Pasien;
      $pasien['id_pasien'] = $lastid;
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
