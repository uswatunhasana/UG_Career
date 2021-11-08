<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkIfelse extends Model
{
    use HasFactory;
    protected $table = "link_ifelse";
    protected $fillable = [
        'id_pilihanjawaban',
        'id_pertanyaancabang',
    ];

    public function pilihanjawaban()
    {
        return $this->belongsTo(PilihanJawaban::class, 'id_pilihanjawaban');
    }
    public function pertanyaancabang()
    {
        return $this->belongsTo(PertanyaanCabang::class, 'id_pertanyaancabang');
    }
}

