<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;
use App\Spesialis;
use App\Agama;
use App\Status;
use DB;
use Illuminate\Support\Facades\Validator;


class DokterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.dokter.index', compact('dokters'));
    }
    public function create()
    {
        $spesialis = Spesialis::all();
        $agamas = Agama::all();
        $status = Status::all();
        return view('admin.dokter.create',compact('dokters','spesialis','agamas','status'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_dokter' => 'required|unique:dm_dokter|max:5',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $dokters = new Dokter;
        $dokters['id_dokter'] = $request->input('id_dokter');
        $dokters['nama_dokter'] = $request->input('nama_dokter');
        $dokters['id_spesialis'] = $request->input('id_spesialis');
        $dokters['jk'] = $request->input('jk');
        $dokters['tempat_lahir'] = $request->input('tempat_lahir');
        $dokters['tgl_lahir'] = $request->input('tgl_lahir');
        $dokters['alamat'] = $request->input('alamat');
        $dokters['no_telp'] = $request->input('no_telp');
        $dokters['email'] = $request->input('email');
        $dokters['agama'] = $request->input('agama');
        $dokters['kewarganegaraan'] = $request->input('kewarganegaraan');
        $dokters['status'] = $request->input('status');
        $dokters['kartu_id'] = $request->input('kartu_id');
        $dokters['no_kartuid'] = $request->input('no_kartuid');
        $dokters['no_izin'] = $request->input('no_izin');
        $dokters['status_praktik'] = $request->input('status_praktik');
        $dokters['tgl_masuk'] = $request->input('tgl_masuk');
        $dokters['tgl_keluar'] = $request->input('tgl_keluar');
        $dokters['keterangan'] = $request->input('keterangan');
        $dokters->save();
        return redirect(route('dokter.index'));

    }
    public function edit($id_dokter)
    {
        $dokters = Dokter::where('id_dokter', '=', $id_dokter)->first();
        $spesialis = Spesialis::all();
        $agamas = Agama::all();
        $status = Status::all();
        return view('admin.dokter.edit',compact('dokters','spesialis','agamas','status'));
    }
    public function update(Request $request, $id_dokter)
    {

        DB::table('dm_dokter')
        ->where('id_dokter', $id_dokter)
        ->update([
          'nama_dokter' => $request->input('nama_dokter'),
          'id_spesialis' => $request->input('id_spesialis'),
          'jk' => $request->input('jk'),
          'tempat_lahir' => $request->input('tempat_lahir'),
          'tgl_lahir' => $request->input('tgl_lahir'),
          'alamat' => $request->input('alamat'),
          'no_telp' => $request->input('no_telp'),
          'email' => $request->input('email'),
          'agama' => $request->input('agama'),
          'kewarganegaraan' => $request->input('kewarganegaraan'),
          'status' => $request->input('status'),
          'kartu_id' => $request->input('kartu_id'),
          'no_kartuid' => $request->input('no_kartuid'),
          'no_izin' => $request->input('no_izin'),
          'status_praktik' => $request->input('status_praktik'),
          'tgl_masuk' => $request->input('tgl_masuk'),
          'tgl_keluar' => $request->input('tgl_keluar'),
          'keterangan' => $request->input('keterangan')
        ]);
        return redirect(route('dokter.index'));
    }
    public function destroy($id_dokter)
    {
        $dokters = Dokter::where('id_dokter', '=', $id_dokter)->delete();
        return redirect(route('dokter.index'));
    }
}
