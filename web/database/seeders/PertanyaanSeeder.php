<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    public function run()
    {
            $array=[
                ['jenis_pertanyaan' => 'text','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F5B', 'pertanyaan' => 'Apa nama perusahaan/kantor tempat Anda bekerja?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'text','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F6', 'pertanyaan' => 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'text','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F7', 'pertanyaan' => 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'text','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F7A', 'pertanyaan' => 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F19A', 'pertanyaan' => 'Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F19B', 'pertanyaan' => 'Tempat anda bekerja saat ini bergerak di bidang apa?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F19C', 'pertanyaan' => 'Berdasarkan pengalaman pada pekerjaan Anda  saat ini,  apa saran yang anda berikan  untuk peningkatan kualitas pembelajaran di Universitas Gunadarma?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F10', 'pertanyaan' => 'Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? ', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F8', 'pertanyaan' => 'Jelaskan status Anda saat ini?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F11', 'pertanyaan' => 'Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F5C', 'pertanyaan' => 'Bila berwiraswasta, apa posisi/jabatan Anda saat ini ?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F5D', 'pertanyaan' => 'Apa tingkat tempat kerja Anda?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F12', 'pertanyaan' => 'Sebutkan sumberdana dalam pembiayaan kuliah?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F14', 'pertanyaan' => 'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F15', 'pertanyaan' => 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F19D', 'pertanyaan' => 'Jabatan anda pada waktu pertama bekerja', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F19E', 'pertanyaan' => 'Tingkat kesesuaian antara Prodi asal saudara dengan pekerjaan yang saudara tekuni saat ini', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'F17A', 'pertanyaan' => 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'F17B', 'pertanyaan' => 'Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'F2', 'pertanyaan' => 'Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'checklist','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F16', 'pertanyaan' => 'Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'checklist','kategori_pertanyaan' => 'alumni', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'F4', 'pertanyaan' => 'Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'P1', 'pertanyaan' => 'Bentuk Perusahaan', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'P2', 'pertanyaan' => 'Jumlah pegawai seluruhnya yang bekerja di perusahaan ini', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'P3', 'pertanyaan' => 'Rata-rata standar gaji pertama (per bulan dalam rupiah) yang diberikan perusahaan kepada alumni Universitas Gunadarma', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'P4', 'pertanyaan' => 'Rata-rata jumlah alumni Universitas Gunadarma yang melamar di perusahaan ini setiap tahunnya', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'P5', 'pertanyaan' => 'Rata-rata jumlah alumni Universitas Gunadarma yang di terima di perusahaan ini setiap tahunnya', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'text','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'tidak', 'kd_pertanyaan' => 'P6', 'pertanyaan' => 'Lulusan Universitas Gunadarma yang bekerja di Perusahaan Bapak/Ibu adalah berasal dari Program Studi', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'P7', 'pertanyaan' => 'Motivasi Kerja', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'P8', 'pertanyaan' => 'Kepemimpinan dan Kemampuan Strategik', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'P9', 'pertanyaan' => 'Kemampuan Manajerial', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'P10', 'pertanyaan' => 'Komunikasi dan Adaptasi Lingkungan', 'created_at' => now(), 'updated_at' => now()],
                ['jenis_pertanyaan' => 'pilihan','kategori_pertanyaan' => 'perusahaan', 'kelas_pertanyaan' => 'wajib', 'is_cabang' => 'ya', 'kd_pertanyaan' => 'P11', 'pertanyaan' => 'Kerja Sama', 'created_at' => now(), 'updated_at' => now()],                
            ];
            foreach($array as $key => $row){
                DB::table('pertanyaans')->insert($row);
            }
            
    }
}
