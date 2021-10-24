<?php

namespace App\Imports;

use App\Models\JawabanResponden;
use App\Models\JawabanRespondendetail;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JawabanRespondenImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        $len = count($rows[0]) - 8;
        $i = 1;
        foreach ($rows as $row) {
            JawabanResponden::create([
                "kategori_responden" => "alumni",
                "id_user" => 4,
            ]);
            $get_id_responden = DB::getPdo()->lastInsertId();
            foreach ($row as $key => $val) {
                if ($i > 8) {
                    JawabanRespondendetail::create([
                        "kd_jawaban" => $key,
                        "kd_pertanyaan" => "s",
                        "jawaban" => $val,
                        "id_jawabanresponden" => $get_id_responden,
                    ]);
                } else {
                    //buat npm user dll
                }
                $i++;
            }
            $i = 1;
        }
    }
}
