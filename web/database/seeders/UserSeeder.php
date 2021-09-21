<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=[[
            'name' => 'Admin Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Prodi Akademik',
            'username' => 'prodi',
            'email' => 'prodi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('prodi'),
            'level' => 'prodi',
            'created_at' => now(),
            'updated_at' => now()
        ]];
    foreach($array as $key => $row){
        DB::table('users')->insert($row);
    }
    
    
    }
}
