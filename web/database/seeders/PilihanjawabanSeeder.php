<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PilihanjawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=[
            ['jawaban' => 'Ya ','id_pertanyaan' => '5', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak','id_pertanyaan' => '5', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertanian tanaman, peternakan, perburuan dan kegiatan yang berhubungan dengan itu   ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kehutanan dan penebangan kayu','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perikanan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan batu bara dan lignit','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan minyak bumi dan gas alam dan panas bumi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan bijih logam','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan dan penggalian lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa pertambangan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri makanan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri minuman','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pengolahan tembakau','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri tekstil','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pakaian jadi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kulit, barang dari kulit dan alas kaki','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kayu, barang dari kayu dan gabus (tidak termasuk furnitur) dan barang anyaman dari bambu, rotan dan sejenisnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kertas dan barang dari kertas','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pencetakan dan reproduksi media rekaman','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri produk dari batu bara dan pengilangan minyak bumi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri bahan kimia dan barang dari bahan kimia','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri farmasi, produk obat kimia dan obat tradisional','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri karet, barang dari karet dan plastik','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri barang galian bukan logam  ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri logam dasar   ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri barang logam, bukan mesin dan peralatannya  ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri komputer, barang elektronik dan optik','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri peralatan listrik','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri mesin dan perlengkapan ytdl','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kendaraan bermotor, trailer dan semi trailer','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri alat angkutan lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri furnitur','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pengolahan lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa reparasi dan pemasangan mesin dan peralatan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengadaan listrik, gas, uap/air panas dan udara dingin','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengadaan air','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengolahan limbah','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengolahan sampah dan daur ulang','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa pembersihan dan pengelolaan sampah lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Konstruksi gedung','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Konstruksi bangunan sipil','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Konstruksi khusus','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perdagangan, reparasi dan perawatan mobil dan sepeda motor','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perdagangan besar, bukan mobil dan sepeda motor','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perdagangan eceran, bukan mobil dan motor','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Angkutan darat dan angkutan melalui saluran pipa ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Angkutan udara','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pergudangan dan jasa penunjang angkutan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pos dan kurir ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penyediaan akomodasi ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penyediaan makanan dan minuman ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penerbitan ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Produksi gambar bergerak, video dan program televisi, perekaman suara dan penerbitan musik ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penyiaran dan pemrograman','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Telekomunikasi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan pemrograman, konsultasi komputer dan kegiatan yang berhubungan dengan itu','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan jasa informasi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa keuangan, bukan asuransi dan dana pensiun','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Asuransi, reasuransi dan dana pensiun, bukan jaminan sosial wajib','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa penunjang jasa keuangan, asuransi dan dana pensiun','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Real estat','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa hukum dan akuntansi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan kantor pusat dan konsultasi manajemen','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa arsitektur dan teknik sipil; analisis dan uji teknis','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penelitian dan pengembangan ilmu pengetahuan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Periklanan dan penelitian pasar','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa profesional, ilmiah dan teknis lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kesehatan hewan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa persewaan dan sewa guna usaha tanpa hak opsi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa ketenagakerjaan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa agen perjalanan, penyelenggara tur dan jasa reservasi lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa keamanan dan penyelidikan ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa untuk gedung dan pertamanan ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa administrasi kantor, jasa penunjang kantor dan jasa penunjang usaha lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Administrasi pemerintahan, pertahanan dan jaminan sosial wajib','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa pendidikan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kesehatan manusia','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kegiatan sosial di dalam panti','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kegiatan sosial di luar panti','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan hiburan, kesenian dan kreativitas','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perpustakaan, arsip, museum dan kegiatan kebudayaan lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan perjudian dan pertaruhan','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan olahraga dan rekreasi lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan keanggotaan organisasi','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa reparasi komputer dan barang keperluan pribadi dan perlengkapan rumah tangga','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa perorangan lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa perorangan yang melayani rumah tangga','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan badan internasional dan badan ekstra internasional lainnya','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Angkutan Air ','id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penambahan bahan pustaka','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengembangan softskill','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menjaga rasio dosen: mahasiswa yang ideal','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bimbingan karir','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bahan kuliah yang lebih kini','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Peningkatan  kualitas SDM','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Peningkatan Sarana/prasarana','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Membangun jejaring dengan industri','id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak','id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak, tapi saya sedang menunggu hasil lamaran kerja','id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Ya, saya akan mulai bekerja dalam 2 minggu ke depan','id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan','id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya','id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bekerja (full time/part time)','id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Belum memungkinkan bekerja','id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Wiraswasta','id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melanjutkan pendidikan','id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak kerja tapi sedang mencari kerja','id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Instansi pemerintah ','id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Organisasi non-profit/Lembaga Swadaya Masyarakat','id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perusahaan swasta','id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Wiraswasta/perusahaan sendiri','id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya, tuliskan:','id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'BUMN/BUMD','id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Institusi / Organisasi Multirateral','id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Founder','id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Co-Founder','id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Staff','id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Freelance/Kerja Lepas','id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lokal/Wilayah/Wiraswasta tidak berbadan hukum','id_pertanyaan' => '12', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Nasional/Wiraswasta berbadan hukum','id_pertanyaan' => '12', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Multinasional/Internasional','id_pertanyaan' => '12', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Biaya Sendiri / Keluarga','id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa ADIK','id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa BIDIKMISI','id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa PPA','id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa AFIRMASI','id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa Perusahaan/Swasta','id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya, tuliskan:','id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Erat','id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Erat','id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup Erat','id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang Erat','id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak Sama Sekali ','id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Setingkat Lebih Tinggi','id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tingkat yang Sama','id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Setingkat Lebih Rendah','id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak Perlu Pendidikan Tinggi','id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Staff','id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Operator / Pelaksana','id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Administrasi','id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengawas / Supervisor','id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kepala Bagian / Departemen','id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Manajer','id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Direktur','id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat sesuai dengan bidang keilmuan (kompetensi)','id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Agak sesuai bidang keilmuan (sifatnya lebih pada keahlian tambahan misalnya bidang IT bagi lulusan non IT)','id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak sesuai bidang keilmuan (di luar bidang keilmuan misalnya Sarjana Ekonomi jadi Public Relation)','id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak berkaitan sama sekali (misalnya menjadi guru Agama, Rohaniawan, Relawan, dsb)','id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Rendah','id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Rendah','id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sedang','id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tinggi','id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Tinggi','id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Rendah','id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Rendah','id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sedang','id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tinggi','id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Tinggi','id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Besar','id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Besar','id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup Besar','id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak Sama Sekali','id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya belum mendapatkan pekerjaan yang lebih sesuai','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Di pekerjaan ini saya memeroleh prospek karir yang baik.','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. ','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lebih aman/terjamin/secure','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lebih menarik ','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya:','id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melalui iklan di koran/majalah, brosur','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pergi ke bursa/pameran kerja','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Mencari lewat internet/iklan online/milis','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Dihubungi oleh perusahaan','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menghubungi Kemenakertrans','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menghubungi agen tenaga kerja komersial/swasta','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menghubungi kantor kemahasiswaan/hubungan alumni','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Membangun jejaring (network) sejak masih kuliah','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Membangun bisnis sendiri','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melalui penempatan kerja atau magang','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya:','id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'BUMN','id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perusahaan Terbatas (PT)','id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Koperasi','id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'CV','id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Firma /Perusahaan Perorangan','id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya','id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '<50 Orang','id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '51 - 100 Orang','id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '101 - 150 Orang','id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '151 - 300 Orang','id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '301 - 500 Orang','id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '>500 Orang','id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '1.500.000 - 2.000.000','id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '2.000.000 - 2.500.000','id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '2.500.000 - 3.000.000','id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '3.500.000 - 4.000.000','id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '> 4.000.000','id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak ada','id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '< 20 Orang','id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '21 - 40 Orang','id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '41 - 60 Orang','id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '61 - 80 Orang','id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '> 80 Orang','id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '< 5 Orang','id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '6 - 15 Orang','id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '16 - 20 Orang','id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '21 - 25 Orang','id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '26 - 30 Orang','id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '> 30','id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
        ];
        foreach($array as $key => $row){
            DB::table('pilihanjawabans')->insert($row);
        }
    }
}
