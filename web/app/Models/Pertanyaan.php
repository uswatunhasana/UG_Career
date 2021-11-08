<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_pertanyaan',
        'no_tampilan',
        'kategori_pertanyaan',
        // 'kelas_pertanyaan',
        'is_cabang',
        'kd_pertanyaan',
        'pertanyaan',
    ];
    public function pilihanjawaban()
    {
    	return $this->hasMany(PilihanJawaban::class, 'id_pertanyaan');
    }

}
