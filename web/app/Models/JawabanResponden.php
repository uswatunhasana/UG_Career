<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pertanyaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanResponden extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pertanyaan',
        'id_user',
        'kategori_responden',
        'pertanyaan',
        'jawaban',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }
}