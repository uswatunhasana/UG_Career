<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class PerusahaanController extends Controller
{

    public function index()
    {
        $perusahaans = Perusahaan::all();
        $users = User::leftJoin('perusahaans', 'users.id', '=', 'perusahaans.id_user')
        ->where('user.level','=','perusahaan')
        ->where('user.id','!=','perusahaan.id_user')
        ->select('*')->get();
        return view('admin.perusahaan', compact('users', 'perusahaans'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = array(
            'alamat' => 'string|required',
            'no_telp' => 'string|required',
            'url_web' => 'string|required',
            'nama_cp' => 'string|required',
            'jabatan' => 'string|required',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Data Wajib diisi');
            return redirect()->back();
        }
        $cek_perusahaan = Perusahaan::where('id_user', $request->id_user)->count();
        if ($cek_perusahaan == 0) {
            $perusahaan = new Perusahaan;
            $perusahaan->id_user = $request->id_user;
            $perusahaan->alamat = $request->alamat;
            $perusahaan->no_telp = $request->no_telp;
            $perusahaan->url_web = $request->url_web;
            $perusahaan->nama_cp = $request->nama_cp;
            $perusahaan->jabatan = $request->jabatan;
            $perusahaan->email_cp = $request->email_cp;
            $perusahaan->save();
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
        
    }

    public function destroy($id)
    {
        DB::table('perusahaans')->where('id_user', $id)->delete();
        return redirect()->back();
    }
}
