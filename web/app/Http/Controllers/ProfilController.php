<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

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
            'name'     => 'string|required',
            'email'    => 'string|required',
            'password' => 'string|min:8|required',
        );

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            Alert::error('Invalid Data', 'Data Tidak Boleh Kosong');
            return redirect()->back();
        }

            $user = User::findOrFail($id);
            $user->name     = $request['name'];
            $user->username    = $request['username'];
            $user->email    = $request['email'];
            $user->password = $request[Hash::make('password')];
            $user->forget_password = $request[Hash::make('password')];
            $user->update();
            $user = User::all();
            Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            return view('admin.dataweb', compact('datawebs'));
    }

    
    public function destroy($id)
    {
        //
    }
}
