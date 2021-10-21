<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jawabanresponden;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class HasilAlumniController extends Controller
{
    public function index()
    {
        $jawaban_respondens = Jawabanresponden::where('kategori_responden','=','alumni')->select('*')->get();
        return view('admin.hasil_alumni', compact('jawaban_respondens'));
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
        DB::table('jawaban_respondens')->where('id', $id)->delete();
        return redirect()->back();
    }
}
