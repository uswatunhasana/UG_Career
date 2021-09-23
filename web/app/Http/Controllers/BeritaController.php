<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita', ['beritas' => $beritas]);
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
    {   

        // dd($request->all());

        $af = $request->file('foto')->store('public');
        $ambilFoto = $af->getClientOriginalName();
        $cek_berita = Berita::where('judul_berita', $request->judul_berita)->count();
        

        if ($cek_berita == 0) {
            $berita = new Berita;
            $berita->jenis_berita = $request->jenis_berita;
            $berita->judul_berita = $request->judul_berita;
            $berita->isi_berita = $request->isi_berita;
            $berita->foto = $ambilFoto;

            $af->move(public_path().'/img/', $ambilFoto);

            $berita->save();

            Alert::success('Berhasil Tambah Berita', 'Silahkan Periksa Kembali');
        } else {
            Alert::error('Judul Berita Sudah Ada', 'Silahkan coba lagi');
        }
        return redirect()->back();
    }

    
    public function show(Request $request)
    {

    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        DB::table('beritas')->where('id', $id)->delete();
        return redirect()->back();
    }
}
