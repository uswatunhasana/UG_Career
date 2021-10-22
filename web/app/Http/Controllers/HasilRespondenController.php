<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jawabanresponden;
use Illuminate\Support\Facades\DB;
use App\Exports\HasilRespondenDetail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class HasilRespondenController extends Controller
{
    
    public function hasilalumni()
    {
        $jawaban_respondens = Jawabanresponden::where('kategori_responden','=','alumni')->select('*')->get();
        return view('admin.hasil_alumni', compact('jawaban_respondens'));
    }

    public function hasilperusahaan()
    {
        $jawaban_respondens = Jawabanresponden::where('kategori_responden','=','perusahaan')->select('*')->get();
        return view('admin.hasil_perusahaan', compact('jawaban_respondens'));
    }
  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function export(){
        return Excel::download(new HasilRespondenDetail, 'users.xlsx');
    }
    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        DB::table('jawabanrespondens')->where('id', $id)->delete();
        DB::table('jawabanrespondendetails')->where('id_jawabanresponden', $id)->delete();
        return redirect()->back();
    }
}
