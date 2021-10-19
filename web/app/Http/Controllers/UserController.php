<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Sekjur;
use App\Models\Alumni;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::where('level','=','prodi')->select('*')->get();
        $prodis = Prodi::all();
        $sekjurs = Sekjur::all();

        return view('admin.user', compact('users', 'prodis','sekjurs'));
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
    {   
        $cek_sekjur = User::where('username', $request->username)->count();
        if ($cek_sekjur == 0) {
            $user = new User;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->email_verified_at=now();
            $user->level = 'prodi';
            $user->password = Hash::make($request->password);
            $user->forget_password = Crypt::encryptString($request->password);
            $user->save();

            $get_id_user = DB::getPdo()->lastInsertId();;

            $sekjur = new Sekjur;
            $sekjur->id_user =  $get_id_user;
            $sekjur->id_prodi = $request->id_prodi;
            $sekjur->created_at = now();
            $sekjur->updated_at = now();
            $sekjur->save();
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
