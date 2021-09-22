<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_instansi',
        'alamat',
        'no_telp',
        'url_web',
        'nama_cp',
        'jabatan',
        'email_cp',
    ];

    public function user()
    {
    	return $this->hasOne(User::class, 'id_user');
    }
}
