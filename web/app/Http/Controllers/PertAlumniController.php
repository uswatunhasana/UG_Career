<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertAlumniController extends Controller
{
    
    public function index()
    {
        $pertanyaans = pertanyaan::all();
        return view('admin.pert_alumni', ['pertanyaans' => $pertanyaans]);
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $rules = array(
            'kd_pertanyaan' => 'string|max:6|required',
            'pertanyaan' => 'string|required',
            'jenis_pertanyaan' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Kode pertanyaan Maksimal 5 Angka dan Data Tidak Boleh Kosong');
            return redirect()->back();
        }
        $cek_pertanyaan = pertanyaan::where('kd_pertanyaan', $request->kd_pertanyaan)->count();
        if ($cek_pertanyaan == 0) {
            $pertanyaan = new pertanyaan;
            $pertanyaan->jenis_pertanyaan = $request->jenis_pertanyaan;
            $pertanyaan->pertanyaan = $request->pertanyaan;
            $pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
            $pertanyaan->save();
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
        $update_pertanyaan->pertanyaan = $request->pertanyaan;
        $update_pertanyaan->kd_pertanyaan = $request->kd_pertanyaan;
        $update_pertanyaan->save();
        Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
        return redirect()->back();
    }

   
    public function destroy($id)
    {
        DB::table('pertanyaans')->where('id', $id)->delete();
        return redirect()->back();
    }
}
