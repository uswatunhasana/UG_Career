<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\PilihanPertanyaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PertAlumniController extends Controller
{
    
    public function index($kategori="teks")
    {
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','alumni')->where('jenis_pertanyaan','=',$kategori)->select('*')->get();
        return view('admin.pert_alumni', ['pertanyaans' => $pertanyaans]);
    }

    public function jenispertanyaan($kategori="teks")
    {
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan','=','alumni')->where('jenis_pertanyaan','=',$kategori)->select('*')->get();
        return view('admin.pert_alumni', ['pertanyaans' => $pertanyaans]);
    }
    public function ajaxdetail($id)
    {
        $data = PilihanPertanyaan::where('id_pertanyaan','=', $id)->select('*')->get();
		echo json_encode($data);
    }

    
    public function store(Request $request)
    {
        // $rules = array(
        //     'kd_pertanyaan' => 'string|max:6|required',
        //     'pertanyaan' => 'string|required',
        //     'jenis_pertanyaan' => 'string|required',
        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid Data', 'Kode pertanyaan Maksimal 5 Angka dan Data Tidak Boleh Kosong');
        //     return redirect()->back();
        // }
        $cek_pertanyaan = Pertanyaan::where('kd_pertanyaan', $request->kd_pertanyaan)->count();
        
        if ($cek_pertanyaan == 0) {
        if($request->kategori == "text"){
            $pertanyaan = new Pertanyaan;
            $pertanyaan->kategori_pertanyaan = 'alumni';
            $pertanyaan->jenis_pertanyaan = $request->kategori;
            $pertanyaan->pertanyaan = $request->pertanyaan;
            $pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
            $pertanyaan->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
            return redirect()->back();
        }else{
            $pertanyaan = new Pertanyaan;
            $pertanyaan->kategori_pertanyaan = 'alumni';
            $pertanyaan->jenis_pertanyaan = $request->kategori;
            $pertanyaan->pertanyaan = $request->pertanyaan;
            $pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
            $pertanyaan->save();
            $get_id_pertanyaan = DB::getPdo()->lastInsertId();

            foreach($request->pilihan_jawaban as $key => $value)
            {
                $perusahaan = new PilihanPertanyaan;
                $perusahaan->pilihan_jawaban = $value;
                $perusahaan->id_pertanyaan =  $get_id_pertanyaan;
                $perusahaan->created_at = now();
                $perusahaan->updated_at = now();
                $perusahaan->save();
            }}
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data pertanyaan Sudah Ada ', ' Silahkan coba lagi');
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
        $rules = array(
            'kd_pertanyaan' => 'string|max:6|required',
            'pertanyaan' => 'string|required',
            'jenis_pertanyaan' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid ', 'Kode pertanyaan Maksimal 5 Angka dan Data Tidak Boleh Kosong');
            return redirect()->back();
        }

        $update_pertanyaan = pertanyaan::findOrFail($id)
        ->where('pertanyaans.id', '=', $id)
        ->select('pertanyaans.*')
        ->first();

        $update_pertanyaan->jenis_pertanyaan = $request->jenis_pertanyaan;
        $update_pertanyaan->kategori_pertanyaan = 'alumni';
        $update_pertanyaan->pertanyaan = $request->pertanyaan;
        $update_pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
        $update_pertanyaan->save();
        Alert::success('Berhasil Update Data ', ' Silahkan dicek kembali');
        return redirect()->back();
    }

   
    public function destroy($id)
    {
        DB::table('pertanyaans')->where('id', $id)->delete();
        return redirect()->back();
    }
}
