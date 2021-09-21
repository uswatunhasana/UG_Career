<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{

    public function run()
    {
        $array=[
        [ 'kd_prodi' => '55001',  'nama_prodi' => 'S3-I Komputer', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '55002',  'nama_prodi' => 'S3-Tekn.Infor', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '60001',  'nama_prodi' => 'S3-I Ekonomi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '73001',  'nama_prodi' => 'S3-I Psikologi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '20101',  'nama_prodi' => 'S2-T Elektro', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '21101',  'nama_prodi' => 'S2-T Mesin', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '22101',  'nama_prodi' => 'S2-T Sipil', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '57101',  'nama_prodi' => 'S2-MSI', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '61101',  'nama_prodi' => 'S2-Manajemen', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '70101',  'nama_prodi' => 'S2-Komunikasi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '73101',  'nama_prodi' => 'S2-Psikologi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '73103',  'nama_prodi' => 'S2-P Profesi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '79102',  'nama_prodi' => 'S2-S Inggris', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '20201',  'nama_prodi' => 'S1-T. Elektro', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '21201',  'nama_prodi' => 'S1-T. Mesin', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '22201',  'nama_prodi' => 'S1-T. Sipil', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '23201',  'nama_prodi' => 'S1-Arsitektur', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '26201',  'nama_prodi' => 'S1-T. Industri', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '54211',  'nama_prodi' => 'S1-Agrotek', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '55201',  'nama_prodi' => 'S1-T. Infor', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '56201',  'nama_prodi' => 'S1-S. Komputer', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '57201',  'nama_prodi' => 'S1-S. Informasi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '60202',  'nama_prodi' => 'S1-E. Syariah', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '61201',  'nama_prodi' => 'S1-Manajemen', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '62201',  'nama_prodi' => 'S1-Akuntansi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '70201',  'nama_prodi' => 'S1-I. Komunkasi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '73201',  'nama_prodi' => 'S1-Psikologi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '79202',  'nama_prodi' => 'S1-S. Inggris', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '93202',  'nama_prodi' => 'S1-Pariwisata', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '56401',  'nama_prodi' => 'D3-T. Komputer', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '57401',  'nama_prodi' => 'D3-M. Infor', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '61404',  'nama_prodi' => 'D3-M. Pemasaran', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '61406',  'nama_prodi' => 'D3-M. Keuangan', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '62401',  'nama_prodi' => 'D3-Akuntasi', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '15401',  'nama_prodi' => 'D3-Kebidanan', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '79209',  'nama_prodi' => 'S1-S. Tiogkok', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '90221',  'nama_prodi' => 'S1-Ds. Interior', 'created_at' => now(), 'updated_at' => now() ],
        [ 'kd_prodi' => '48201',  'nama_prodi' => 'S1-Farmasi', 'created_at' => now(), 'updated_at' => now() ],
        ];
        foreach($array as $key => $row){
            DB::table('prodis')->insert($row);
        }

    }
}
