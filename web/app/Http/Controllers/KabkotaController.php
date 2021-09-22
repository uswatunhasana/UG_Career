<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Kabkota;
use App\Models\Provinsi;


class KabkotaController extends Controller
{
    public function index()
    {
        $kabkotas = Kabkota::all();
        $provinsis = Provinsi::all();
        return view('admin.kabkota', compact('provinsis', 'kabkotas'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $cek_kabkota = Kabkota::where('kd_kabkota', $request->kd_kabkota)->orWhere('nama_kabkota', $request->nama_kabkota)->count();
        if ($cek_kabkota == 0) {
            $kabkota = new Kabkota;
            $kabkota->id_provinsi = $request->id_provinsi;
            $kabkota->nama_kabkota = $request->nama_kabkota;
            $kabkota->kd_kabkota = $request->kd_kabkota;
            $kabkota->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Kab/Kota Sudah Ada ', ' Silahkan coba lagi');
        }
        return redirect()->back();
    }

  
    public function show($id)
    {
        //
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
        //
    }
}
