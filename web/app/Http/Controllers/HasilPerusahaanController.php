<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< Updated upstream
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\JawabanResponden;
=======
use App\Models\JawabanResponden;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
>>>>>>> Stashed changes

class HasilPerusahaanController extends Controller
{
    
    public function index()
    {
        $jawaban_respondens = JawabanResponden::where('kategori_responden','=','perusahaan')->select('*')->get();
<<<<<<< Updated upstream
        return view('admin.hasil_perusahaan', ['jawaban_respondens' => $jawaban_respondens]);
=======
        return view('admin.hasil_perusahaan', compact('jawaban_respondens'));
>>>>>>> Stashed changes
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
