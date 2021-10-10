<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Prodi;
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
        //
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
