<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\Alumni;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Support\Facades\Crypt;


class DataAlumniController extends Controller
{

    public function index()
    {
        $alumnis = Alumni::all();
        $prodis = Prodi::all();
        // dd($alumnis);
        return view('admin.dataalumni', compact('alumnis', 'prodis'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $rules = array(
            'password' => 'string|min:8',
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Password min 8 digit, kombinasi dari huruf dan angka');
            return redirect()->back();
        }
        $cek_alumni = User::where('username', $request->username)->count();
        if ($cek_alumni == 0) {
            $user           = new User;
            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->email_verified_at  = now();
            $user->level    = 'alumni';
            $user->password = Hash::make($request->password);
            $user->forget_password = Crypt::encryptString($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;

            $alumni = new Alumni;
            $alumni->id_user     =  $get_id_user;
            $alumni->npm         = $request->npm;
            $alumni->tahun_masuk = $request->tahun_masuk;
            $alumni->tahun_lulus = $request->tahun_lulus;
            $alumni->id_prodi    = $request->id_prodi;
            $alumni->no_telp     = $request->no_telp;
            $alumni->nik         = $request->nik;
            $alumni->created_at  = now();
            $alumni->updated_at  = now();
            $alumni->save();
            Alert::success(' Akun sudah berhasil didaftarkan ');
        } else {
            Alert::error('Data Akun Sudah Ada ', ' Silahkan coba lagi');
            return redirect()->back();
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
        // $rules = array(
        //     'username' => 'string|unique|required',
        //     'password' => 'string|min:8|required',
        //     'name' => 'string|required',
        //     'email' => 'string|unique|required',
        //     'no_telp' => 'string|required',
        //     'npm' => 'string|unique|required',

        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid Data', 'Data sudah tersedia');
        //     return redirect()->back();
        // }
        // $cek_alumni = Alumni::where('npm', $user->npm)->count();
        // if ($cek_alumni == 0) {
            $alumni = Alumni::findOrFail($id)
            ->where('alumnis.id', '=', $id)
            ->select('alumnis.*')
            ->first();

            $user = User::findOrFail($alumni->id_user)
            ->where('users.id', '=', $alumni->id_user)
            ->select('users.*')
            ->first();
            $user->name = $request->name;
            $user->username = $user->username;
            $user->email = $request->email;
            $user->level = 'alumni';
            if($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->forget_password = Crypt::encryptString($request->password);
            } else {
                $user->password = $user->password;
                $user->forget_password = $user->forget_password;
            }
            $user->save();
        
            $alumni->id_user     = $alumni->id_user;
            $alumni->npm         = $alumni->npm;
            $alumni->tahun_masuk = $request->tahun_masuk;
            $alumni->tahun_lulus = $request->tahun_lulus;
            $alumni->id_prodi    = $request->id_prodi;
            $alumni->no_telp     = $request->no_telp;
            $alumni->nik         = $request->nik;
            $alumni->save();
            Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
        // } else {
        //     Alert::error('Data Alumni Sudah Ada ', ' Silahkan coba lagi');
        // }
        return redirect()->back();
    }


    public function destroy($id)
    {
        DB::table('alumnis')->where('id_user', $id)->delete();
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back();
    }
}
