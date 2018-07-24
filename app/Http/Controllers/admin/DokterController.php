<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;
use App\Spesialis;
use App\Agama;
use App\Status;
use DB;


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
              'email' => $request->input('email'),
              'agama' => $request->input('agama'),
              'kewarganegaraan' => $request->input('kewarganegaraan'),
              'status' => $request->input('status'),
              'kartu_id' => $request->input('kartu_id'),
              'no_kartuid' => $request->input('no_kartuid'),
              'no_izin' => $request->input('no_izin'),
              'status_praktik' => $request->input('status_praktik'),
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
