<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\JadwalPoli;
use App\Dokter;
use App\Kategori;
use App\Poli;
use Illuminate\Support\Facades\Validator;

class JadwalPoliController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $jadwal_polis1 = JadwalPoli::all()->where('id_kategori', '=', 2);
        $jadwal_polis2 = JadwalPoli::all()->where('id_kategori', '=', 3);
        return view('admin.jadwal_poli.index', compact('jadwal_polis1', 'jadwal_polis2'));
    }
    public function create()
    {
      $dokters = Dokter::all();
      $polis = Poli::all();
      $kategoris = Kategori::all();
      return view('admin.jadwal_poli.create', compact('dokters','polis','kategoris'));
    }
    public function store(Request $request)
    {

      $validator = Validator::make($request->all(), [
          'kategori' => 'required',
          'poli' => 'required',
          'hari' => 'required',
          'jam' => 'required',
      ]);

      if ($validator->fails()) {
          return back()
                      ->withErrors($validator)
                      ->withInput();
      }

      $jadwalpolis = new JadwalPoli;
      $jadwalpolis['id_kategori'] = $request->input('kategori');
      $jadwalpolis['id_poli'] = $request->input('poli');
      $jadwalpolis['id_dokter'] = $request->input('dokter');
      $jadwalpolis['hari'] = $request->input('hari');
      $jadwalpolis['jam'] = $request->input('jam');
      $jadwalpolis->save();
      return redirect(route('jadwal_poli.index'));

    }
    public function edit($id)
    {
        $jadwalpolis = JadwalPoli::find($id);
        $dokters = Dokter::all();
        $polis = Poli::all();
        $kategoris = Kategori::all();
        return view('admin.jadwal_poli.edit',compact('jadwal_polis','dokters','polis','kategoris'));
    }
    public function update(Request $request, $id)
    {
      DB::table('dm_dokter')
      ->where('id', $id)
      ->update([
        'id_kategori' => $request->input('kategori'),
        'id_poli' => $request->input('poli'),
        'id_dokter' => $request->input('dokter'),
        'hari' => $request->input('hari'),
        'jam' => $request->input('jam')
      ]);
      return redirect(route('jadwal_poli.index'));
    }
    public function destroy($id_artikel)
    {
        $artikels = JadwalPoli::find($id_artikel)->delete();
        return redirect(route('jadwal_poli.index'));
    }
}
