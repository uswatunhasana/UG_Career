<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jawabanresponden;
use Illuminate\Support\Facades\DB;
use App\Exports\HasilRespondenDetail;
use App\Exports\HasilRespondenPerusahaanDetail;
use Carbon\Carbon;
use App\Imports\JawabanRespondenImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class HasilRespondenController extends Controller
{

    public function hasilalumni()
    {
        $jawaban_respondens = Jawabanresponden::where('kategori_responden', '=', 'alumni')->select('*')->get();
        return view('admin.hasil_alumni', compact('jawaban_respondens'));
    }

    public function hasilperusahaan()
    {
        $jawaban_respondens = Jawabanresponden::where('kategori_responden', '=', 'perusahaan')->select('*')->get();
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

    public function exportalumni()
    {
        return Excel::download(new HasilRespondenDetail, 'hasilalumni.xlsx');
    }

    public function exportperusahaan(){
        // $start = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        // $end = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');

        // if (request()->date != '') {
        //     $date = explode(' - ', request()->date);
        //     $start = Carbon::parse($date[0])->format('Y-m-d') . ' 00:00:01';
        //     $end = Carbon::parse($date[1])->format('Y-m-d') . ' 23:59:59';
        // }
        // $transaksis = HasilAlumni::select('kode_transaksi', 'bayar', 'kembali', 'created_at', DB::raw('sum(total_barang) as total_beli'), 'subtotal', 'user_id', 'daftar_pelanggan_id')
        // ->groupBy('kode_transaksi', 'bayar', 'kembali', 'created_at', 'subtotal', 'user_id', 'daftar_pelanggan_id')
        // ->whereBetween(DB::raw('DATE(created_at)'), array($start, $end))
        // ->get();
        return Excel::download(new HasilRespondenPerusahaanDetail, 'hasilperusahaan.xlsx');
    }
    public function importalumni(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,xlx,xls,xlsx'
        ]);

        if ($validator->fails()) {
            Alert::error('Invalid Format Data', 'Pastikan Data Berbentuk (csv,xlx,xls,xlsx)');
            return redirect()->back();
        }
        $file = $request->file('file');
        $nama_file = time() . '_' . $file->getClientOriginalName();
        $file->move('public/file_responden/', $nama_file);
        Excel::import(new JawabanRespondenImport, 'public/file_responden/' . $nama_file);
        Alert::success('sukses', 'Data Hasil Responden Berhasil Diimport!');
        return redirect()->back();
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
