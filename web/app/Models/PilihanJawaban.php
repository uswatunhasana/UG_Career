<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanJawaban extends Model
{
    use HasFactory;
    protected $table = "pilihanjawabans";
    protected $fillable = [
        'pilihan_pertanyaan',
        'id_pertanyaan',
    ];

    public function pertanyaan()
    {
    	return $this->belongsTo(User::class, 'id_pertanyaan');
    }
}
