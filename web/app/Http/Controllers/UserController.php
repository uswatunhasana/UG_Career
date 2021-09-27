<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::where('level','=','prodi')->select('*')->get();
        return view('admin.user', ['users' => $users]);
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
    {   
        $cek_perusahaan = User::where('username', $request->username)->count();
        if ($cek_perusahaan == 0) {
            $user = new User;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->email_verified_at=now();
            $user->level = 'perusahaan';
            $user->password = Hash::make($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;

            $perusahaan = new Sekjur;
            $perusahaan->id_user =  $get_id_user;
            $perusahaan->alamat = $request->alamat;
            $perusahaan->no_telp = $request->no_telp;
            $perusahaan->url_web = $request->url_web;
            $perusahaan->nama_cp = $request->nama_cp;
            $perusahaan->jabatan = $request->jabatan;
            $perusahaan->email_cp = $request->email_cp;
            $perusahaan->created_at = now();
            $perusahaan->updated_at = now();
            $perusahaan->save();
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Akun Sudah Ada ', ' Silahkan coba lagi');
        }
        return redirect()->back();
       
    }

    
    public function show(Request $request)
    {

    }

    
    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back();
    }
}
