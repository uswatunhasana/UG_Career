<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_lahir',
        'jenis_kelamin',
        'alamat_sekarang',
        'alamat_tetap',
        'no_telp',
        'tahun_lulus',
    ];
    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }
}
