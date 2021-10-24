<?php

namespace App\Exports;

use App\Models\Jawabanresponden;
use App\Models\Jawabanrespondendetail;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HasilRespondenPerusahaanDetail implements FromView
{
    public function view(): View
    {
        $jawabanrespondens = Jawabanresponden::where('kategori_responden','=','perusahaan')->get();
        $kd_pertanyaan_querys = Jawabanrespondendetail::leftJoin('jawabanrespondens','jawabanrespondens.id','=','jawabanrespondendetails.id_jawabanresponden')
        ->where('jawabanrespondens.kategori_responden','=','perusahaan')
        ->select('jawabanrespondendetails.kd_jawaban', 'jawabanrespondendetails.kd_pertanyaan')->orderBy('jawabanrespondendetails.kd_jawaban')
        ->get();
        $kd_pertanyaans = [];
        foreach ($kd_pertanyaan_querys as $query) {
            $kd_pertanyaans[$query->kd_pertanyaan . "-" . $query->kd_jawaban] = $query;
        }
        ksort($kd_pertanyaans, SORT_NATURAL);
        // dd($kd_pertanyaans);
        return view('admin.exports.jawabanrespondenperusahaan', compact('jawabanrespondens', 'kd_pertanyaans'));
    }
}
