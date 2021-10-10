<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Alumni;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        return view('user.login');
    }

    public function postlogin(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
        'email' => 'required|email',
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
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->level == 'alumni'){
                return redirect()->route('dashboard.user');
            } else{
                return redirect()->route('home.perusahaan');
            }
        } else {
        return redirect()->route('login.index')->with('error','Email dan Password salah');
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
        User::create([
            'name' => $request->name,
            'level' => 'perusahaan',
            'email' => $request->email,
            'email_verified_at' => now(),
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return Redirect('/');
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
            $user->password = Hash::make($request->password);
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
            Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Data Akun Sudah Ada ', ' Silahkan coba lagi');
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
