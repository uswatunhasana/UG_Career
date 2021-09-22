<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kabkota;
use App\Models\Provinsi;


class KabkotaController extends Controller
{
    public function index()
    {
        $kabkotas = Kabkota::all();
        $provinsis = Provinsi::all();
        return view('admin.kabkota', compact('provinsis', 'kabkotas'));
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
