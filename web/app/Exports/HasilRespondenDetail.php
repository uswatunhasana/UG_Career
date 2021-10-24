<?php

namespace App\Exports;

use App\Models\Jawabanresponden;
use App\Models\Jawabanrespondendetail;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class HasilRespondenDetail implements FromView
{
    public function view(): View
    {
        $jawabanrespondens = Jawabanresponden::all();
        $kd_pertanyaan_querys = Jawabanrespondendetail::select('kd_jawaban', 'kd_pertanyaan')->orderBy('kd_jawaban')->get();
        $kd_pertanyaans = [];
        foreach ($kd_pertanyaan_querys as $query) {
            $kd_pertanyaans[$query->kd_pertanyaan . "-" . $query->kd_jawaban] = $query;
        }
        ksort($kd_pertanyaans, SORT_NATURAL);
        // dd($kd_pertanyaans);
        return view('admin.exports.jawabanrespondenalumni', compact('jawabanrespondens', 'kd_pertanyaans'));
    }
}
