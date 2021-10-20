<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pertanyaan;
use App\Models\PertanyaanCabang;
use App\Models\PilihanJawaban;
use App\Models\HasilPerusahaan;
use App\Models\Perusahaan;
use App\Models\Alumni;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    
    public function index()
    {
        //
    }

    public function isikuisioneralumni()
    {
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','alumni')->orderBy('kd_pertanyaan')->get();
        $i=0;
        foreach ($pertanyaans as $pertanyaan) {
            $pertanyaans[$i]["pilihanjawaban"] = PilihanJawaban::where('id_pertanyaan','=', $pertanyaan['id'])->select('*')->get();
            if($pertanyaan['is_cabang'] == "ya"){
                $pertanyaans[$i]["pertanyaan_cabang"] = PertanyaanCabang::where('id_pertanyaan','=',$pertanyaan['id'])->select('*')->get();
            }
            $i++;
        }
        return view('user.isikuisioneralumni', compact('pertanyaans'));
    }

    public function isikuisionerperusahaan($id)
    {
        $perusahaans = Perusahaan::where('id_user','=',$id)->select('*')->get();
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','perusahaan')->orderBy('kd_pertanyaan')->get();
        $i=0;
        foreach ($pertanyaans as $pertanyaan) {
            $pertanyaans[$i]["pilihanjawaban"] = PilihanJawaban::where('id_pertanyaan','=', $pertanyaan['id'])->select('*')->get();
            if($pertanyaan['is_cabang'] == "ya"){
                $pertanyaans[$i]["pertanyaan_cabang"] = PertanyaanCabang::where('id_pertanyaan','=',$pertanyaan['id'])->select('*')->get();
            }
            $i++;
        }
        return view('user.isikuisioner_perusahaan', compact('pertanyaans','perusahaans'));
    }

    public function isikuisionercontoh($id)
    {
        // $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','alumni')->orderBy('kd_pertanyaan')->get();
        $alumnis = Alumni::where('id_user','=',$id)->select('*')->get();
        return view('user.isikuisioner_alumni', compact('pertanyaans','alumnis'));
    }
 
    public function createjawabanalumni(Request $request)
    {
        $user = Auth::user();
        // foreach($pertanyaans as $key => $val)
        // {
        // $hasil_perusahaan= new HasilPerusahaan;
        // $hasil_perusahaan->jawaban=$val;
        // $hasil_perusahaan->kd_pertanyaan=$request->kd_pertanyaan[$key];
        // $hasil_perusahaan->email =  $user->email;
        // $hasil_perusahaan->save();
        // }
        Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        return redirect()->back();
    }

  
    public function kuisionerperusahaanstore(Request $request)
    {
        // $perusahaans = Perusahaan::all();
    
        $user = Auth::user();
        // $input = $request->all();
        $pertanyaans = Pertanyaan::leftJoin('pertanyaancabangs','pertanyaancabangs.id_pertanyaan','=','pertanyaans.id')
        ->select('pertanyaans.kd_pertanyaan','pertanyaancabangs.kd_cabang')
        ->get();
        dd($pertanyaans);
        // dd($pertanyaans);

        // $kd_pertanyaan[$key] = $request->$pertanyaan->kd_pertanyaan;
        // $i=0;
        // foreach ($pertanyaans as $pertanyaan) {
        //     $pertanyaans[$i]["pilihanjawaban"] = PilihanJawaban::where('id_pertanyaan','=', $pertanyaan['id'])->select('*')->get();
        //     if($pertanyaan['is_cabang'] == "ya"){
        //         $pertanyaans[$i]["pertanyaan_cabang"] = PertanyaanCabang::where('id_pertanyaan','=',$pertanyaan['id'])->select('kd_cabang ')->get();
        //     }
        //     $i++;
        // }
        // dd($request->kd_pertanyaan['F2']);
        
        foreach($pertanyaans as $key => $val)
        {
        $hasil_perusahaan= new HasilPerusahaan;
        $hasil_perusahaan->jawaban=$val;
        $hasil_perusahaan->kd_pertanyaan=$request->kd_pertanyaan[$key];
        $hasil_perusahaan->email =  $user->email;
        $hasil_perusahaan->save();
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
