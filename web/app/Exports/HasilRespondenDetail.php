<?php

namespace App\Exports;

use App\Models\Jawabanresponden;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class HasilRespondenDetail implements FromView
{
    public function view(): View
    {
        return view('admin.exports.jawabanrespondenalumni', [
            'jawabanrespondens' => Jawabanresponden::leftJoin('jawabanrespondendetails', 'jawabanrespondendetails.id_jawabanresponden', '=', 'jawabanrespondens.id')
            ->select('jawabanrespondens.*', 'jawabanrespondendetails.*')
            ->get()
        ]);
    }
}
