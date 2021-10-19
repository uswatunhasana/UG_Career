<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class ProfilController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        //
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
        $users = User::where('id','=',$id)->select('*')->get();
        return view('admin.editprofil', ['users' => $users]);
    }

   
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'     => 'string',
            'email'    => 'string',
            'password' => 'string|min:8',
        );

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Password Minimal 8 Karakter, kombinasi dari huruf dan angka');
            return redirect()->back();
        }
            $user = User::findOrFail($id);
            $user->name     = $request->name;
            $user->username    = $user->username;
            $user->email    = $request->email;
            // $user->password = $request[Hash::make('password')];
            // $user->forget_password = $request[Hash::make('password')];
            if($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->forget_password = Crypt::encryptString($request->password);
            } else {
                $user->password = $user->password;
                $user->forget_password = $user->forget_password;
            }
            $user->update();
            // $user = User::all();
            Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            return redirect()->back();

    }

    
    public function destroy($id)
    {
        //
    }
}
