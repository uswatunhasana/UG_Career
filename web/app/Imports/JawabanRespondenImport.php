<?php

namespace App\Imports;

use App\Models\JawabanResponden;
use App\Models\JawabanRespondendetail;
use Maatwebsite\Excel\Concerns\ToModel;

class JawabanRespondenImport implements ToModel
{

    public function model(array $row)
    {
        return new JawabanResponden([
            //
        ]);
    }
}
