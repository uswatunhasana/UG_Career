<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $array=[
            ['name' => 'Admin Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('890admin'),
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()],

            ['name' => 'Aku Mahasiswa',
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('mahasiswa123'),
            'level' => 'mahasiswa',
            'created_at' => now(),
            'updated_at' => now()],

            ['name' => 'Perusahaan Unicorn',
            'username' => 'perusahaan',
            'email' => 'perusahaan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('usaha1234'),
            'level' => 'perusahaan',
            'created_at' => now(),
            'updated_at' => now()],


            ['name' => 'Prodi Akademik',
            'username' => 'prodi',
            'email' => 'prodi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('901prodi'),
            'level' => 'prodi',
            'created_at' => now(),
            'updated_at' => now()]];

        foreach($array as $key => $row){
            DB::table('users')->insert($row);
        }
    
    
    }
}
