<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pertanyaan;
use App\Models\PertanyaanCabang;
use App\Models\Jawabanresponden;
use App\Models\Jawabanrespondendetail;
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

    public function isikuisioneralumni($id)
    {
        $alumnis = Alumni::where('id_user','=',$id)->select('*')->get();
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','alumni')->orderBy('kd_pertanyaan')->get();
        $i=0;
        foreach ($pertanyaans as $pertanyaan) {
            $pertanyaans[$i]["pilihanjawaban"] = PilihanJawaban::where('id_pertanyaan','=', $pertanyaan['id'])->select('*')->get();
            if($pertanyaan['is_cabang'] == "ya"){
                $pertanyaans[$i]["pertanyaan_cabang"] = PertanyaanCabang::where('id_pertanyaan','=',$pertanyaan['id'])->select('*')->get();
            }
            $i++;
        }
        return view('user.isikuisioneralumni', compact('pertanyaans','alumnis'));
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
    
        $user = Auth::user();

        // $cek_perusahaan = Jawabanresponden::where('user', $request->username)->count();
        // if ($cek_perusahaan == 0) {
            $responden = new Jawabanresponden;
            $responden->user_id = $user->id;
            $responden->kategori_responden = 'perusahaan';
            $responden->save();

            $get_id_responden = DB::getPdo()->lastInsertId();;
        
        foreach($request->all() as $key => $val)
        {
            dd($key);
        $hasil_perusahaan= new Jawabanrespondendetail;
        $hasil_perusahaan->kd_pertanyaan=$request->kd_pertanyaan[$key];
        $hasil_perusahaan->jawaban=$val;
        $hasil_perusahaan->id_jawabanresponden=  $get_id_responden;
        $hasil_perusahaan->save();
        }
    // }else{

    //     }

        return redirect()->back();
    }

    public function kuisioneralumnistore(Request $request)
    {
    
        $user = Auth::user();

        // $cek_perusahaan = Jawabanresponden::where('user', $request->username)->count();
        // if ($cek_perusahaan == 0) {
            $responden = new Jawabanresponden;
            $responden->id_user = $user->id;
            $responden->kategori_responden = 'alumni';
            $responden->save();

            $get_id_responden = DB::getPdo()->lastInsertId();;
        
        foreach($request->except('_token','_method') as $key => $val)
        {
        $hasil_alumni= new Jawabanrespondendetail;
        $hasil_alumni->kd_pertanyaan= $key;
        $hasil_alumni->jawaban=$val;
        $hasil_alumni->id_jawabanresponden=  $get_id_responden;
        $hasil_alumni->save();
        }
    // }else{

    //     }

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
