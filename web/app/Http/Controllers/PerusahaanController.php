<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\User;

class PerusahaanController extends Controller
{

    public function index()
    {
        $perusahaans = Perusahaan::all();
        $users = User::where('level','=','perusahaan')->select('*')->get();
        return view('admin.perusahaan', compact('users', 'perusahaans'));
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
