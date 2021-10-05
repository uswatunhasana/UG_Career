<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function postlogin(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'alumni') {
                return redirect()->intended('login/alumni');
            } else {
                return redirect()->intended('login');
            }
            return redirect('login');
        }
        return redirect('login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }

    public function registrasi()
    {
        return view('user.daftar');
    }

    public function simpanregistrasi(Request $request)
    {
        return view('user.daftar');
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
