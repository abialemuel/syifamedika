<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Artikel;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    //
    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.artikel.index', compact('artikels'));
    }
    public function create()
    {
        return view('admin.artikel.create');
    }
    public function store(Request $request)
    {

        $artikels = new Artikel;
        $artikels['judul'] = $request->input('judul');
        $artikels['tanggal'] = $request->input('tanggal');
        $artikels['aktif'] = $request->input('aktif');
        $artikels['text'] = $request->input('text');
        $artikels['id_admin'] = "";
        $artikels->save();
        return redirect(route('artikel.index'));

    }
    public function edit($id_artikel)
    {
        $artikels = Artikel::find($id_artikel);
        return view('admin.artikel.edit',compact('artikels'));
    }
    public function update(Request $request, $id_artikel)
    {
        $artikels = Artikel::find($id_artikel);
        $artikels['judul'] = $request->input('judul');
        $artikels['tanggal'] = $request->input('tanggal');
        $artikels['aktif'] = $request->input('aktif');
        $artikels['text'] = $request->input('text');
        $artikels['id_admin'] = "";
        $artikels->save();
        return redirect(route('artikel.index'));
    }
    public function destroy($id_artikel)
    {
        $artikels = Artikel::find($id_artikel)->delete();
        return redirect(route('artikel.index'));
    }
}
