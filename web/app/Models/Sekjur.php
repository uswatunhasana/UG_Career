<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekjur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_prodi',
        'id_user',
    ];
    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }

}
