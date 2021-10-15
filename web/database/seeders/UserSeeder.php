<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    public function run()
    {
        $array=[
            ['name' => 'Admin Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('890admin'),
            // 'confirm_password' => null,
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()],

            ['name' => 'Aku Mahasiswa',
            'username' => 'alumni',
            'email' => 'mahasiswa@gmail.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('mahasiswa123'),
            // 'confirm_password' => null,
            'level' => 'alumni',
            'created_at' => now(),
            'updated_at' => now()],

            ['name' => 'Perusahaan Unicorn',
            'username' => 'perusahaan',
            'email' => 'perusahaan@gmail.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('usaha1234'),
            // 'confirm_password' => null,
            'level' => 'perusahaan',
            'created_at' => now(),
            'updated_at' => now()],


            ['name' => 'Prodi Akademik',
            'username' => 'prodi',
            'email' => 'prodi@gmail.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('901prodi'),
            // 'confirm_password' => null,
            'level' => 'prodi',
            'created_at' => now(),
            'updated_at' => now()]];

        foreach($array as $key => $row){
            DB::table('users')->insert($row);
        }
    
    
    }
}
