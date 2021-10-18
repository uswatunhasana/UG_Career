<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Alumni;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Mail\TracerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class AuthUserController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function postlogin(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $this->validate($request,[
        'username' => 'required',
        'password' => 'required',
        ]);

        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();
        //     if ($user->level == 'alumni') {
        //         return redirect('/');
        //     } elseif ($user->level == 'perusahaan'){
        //         return redirect('/');
        //     }
        //     return redirect('login');
        // }
        // return redirect('login')->withSuccess('Username dan Password belum terdaftar');
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
 
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'], )))
        {
            $user = Auth::user();
            if ($user->level == 'alumni') {
                return redirect()->intended('dashboard.user');
            } elseif ($user->level == 'perusahaan'){
                return redirect()->intended('dashboard.user');
            }
            return redirect()->route('dashboard.user');
        }else{
            Alert::error('Salah Username atau Password ', ' Silahkan coba lagi');
            return redirect()->back();
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }

    public function registrasi()
    {
        $prodis = Prodi::all();
        return view('user.daftar', ['prodis' => $prodis]);
    }

    public function simpanregistrasi(Request $request)
    {
        // $rules = array(
        //     'password' => 'string|min:8|required',
        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid Data', 'Password min 8 digit');
        //     return redirect()->back();
        // }
        $daftar_perusahaan = User::where('username', $request->username)->count();
        if ($daftar_perusahaan == 0) {
            $user           = new User;
            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->email_verified_at  = now();
            $user->level    = 'perusahaan';
            $user->password = Crypt::encryptString($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;

            $perusahaan = new Perusahaan;
            $perusahaan->id_user     =  $get_id_user;
            $perusahaan->no_telp     = $request->no_telp;
            $perusahaan->url_web     = $request->url_web;
            $perusahaan->alamat      = $request->alamat;
            $perusahaan->nama_cp     = $request->nama_cp;
            $perusahaan->jabatan     = $request->jabatan;
            $perusahaan->created_at  = now();
            $perusahaan->updated_at  = now();
            $perusahaan->save();
            Alert::success(' Akun sudah berhasil didaftarkan ');
        } else {
            Alert::error('Data Akun Sudah Ada ', ' Silahkan coba lagi');
            return redirect()->back();
        }
        return view('user.login');
    }

    public function store(Request $request)
    {
        // $rules = array(
        //     'password' => 'string|min:8|required',
        // );
        // $validation = Validator::make($request->all(), $rules);
        // if ($validation->fails()) {
        //     Alert::error('Invalid Data', 'Password min 8 digit');
        //     return redirect()->back();
        // }
        $daftar_alumni = User::where('username', $request->username)->count();
        if ($daftar_alumni == 0) {
            $user           = new User;
            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->email_verified_at  = now();
            $user->level    = 'alumni';
            $user->password = Crypt::encryptString($request->password);
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
        return view('user.login');
    }

    public function lupa_password()
    {
        return view('user.lupapassword');
    }

    public function post_lupa_password(Request $request)
    {
        
            // $cek_user = User::findOrFail($request->email)
            //     ->where('email', '=', $request->email)
            //     ->select('users.*')
            //     ->first();
            // dd($cek_user);

        $request->validate([
        'email' => 'required|email',
        ]);

        $user=User::where('email', $request->email)->count();

        if(!$user){
            return redirect()->back();
        } else {
            // Mail::to("firdaaviola17@gmail.com")->send(new TracerEmail());
            $data_user = User::where('email','=', $request->email)->select('*')->first();
            $decrypted = Crypt::decryptString($data_user->password);
            Mail::send('user.email', ['data_user' => $data_user, 'password' => $decrypted], function ($m) use ($data_user) {
                $m->from("example@gmail.com", config('app.Mail.TracerEmail', 'APP Name'));
                $m->to($data_user->email, $data_user->email)->subject('Email UG Tracer');
            });
            //  \Mail::raw('Halo '.$data_user->name, 'Username : '.$data_user->username, function ($message) use ($data_user){
            //      $message->to($data_user->email, $data_user->name);
            //      $message->subject('Haloooooooooo!!!');
            //  });
            return redirect()->back();
        }
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
