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
            ['jawaban' => 'Ya ','kd_jawaban' => 'F19A', 'id_pertanyaan' => '5', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak','kd_jawaban' => 'F19A', 'id_pertanyaan' => '5', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertanian tanaman, peternakan, perburuan dan kegiatan yang berhubungan dengan itu   ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kehutanan dan penebangan kayu','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perikanan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan batu bara dan lignit','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan minyak bumi dan gas alam dan panas bumi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan bijih logam','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertambangan dan penggalian lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa pertambangan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri makanan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri minuman','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pengolahan tembakau','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri tekstil','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pakaian jadi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kulit, barang dari kulit dan alas kaki','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kayu, barang dari kayu dan gabus (tidak termasuk furnitur) dan barang anyaman dari bambu, rotan dan sejenisnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kertas dan barang dari kertas','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pencetakan dan reproduksi media rekaman','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri produk dari batu bara dan pengilangan minyak bumi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri bahan kimia dan barang dari bahan kimia','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri farmasi, produk obat kimia dan obat tradisional','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri karet, barang dari karet dan plastik','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri barang galian bukan logam  ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri logam dasar   ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri barang logam, bukan mesin dan peralatannya  ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri komputer, barang elektronik dan optik','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri peralatan listrik','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri mesin dan perlengkapan ytdl','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri kendaraan bermotor, trailer dan semi trailer','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri alat angkutan lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri furnitur','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Industri pengolahan lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa reparasi dan pemasangan mesin dan peralatan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengadaan listrik, gas, uap/air panas dan udara dingin','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengadaan air','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengolahan limbah','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengolahan sampah dan daur ulang','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa pembersihan dan pengelolaan sampah lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Konstruksi gedung','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Konstruksi bangunan sipil','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Konstruksi khusus','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perdagangan, reparasi dan perawatan mobil dan sepeda motor','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perdagangan besar, bukan mobil dan sepeda motor','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perdagangan eceran, bukan mobil dan motor','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Angkutan darat dan angkutan melalui saluran pipa ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Angkutan udara','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pergudangan dan jasa penunjang angkutan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pos dan kurir ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penyediaan akomodasi ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penyediaan makanan dan minuman ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penerbitan ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Produksi gambar bergerak, video dan program televisi, perekaman suara dan penerbitan musik ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penyiaran dan pemrograman','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Telekomunikasi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan pemrograman, konsultasi komputer dan kegiatan yang berhubungan dengan itu','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan jasa informasi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa keuangan, bukan asuransi dan dana pensiun','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Asuransi, reasuransi dan dana pensiun, bukan jaminan sosial wajib','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa penunjang jasa keuangan, asuransi dan dana pensiun','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Real estat','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa hukum dan akuntansi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan kantor pusat dan konsultasi manajemen','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa arsitektur dan teknik sipil; analisis dan uji teknis','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penelitian dan pengembangan ilmu pengetahuan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Periklanan dan penelitian pasar','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa profesional, ilmiah dan teknis lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kesehatan hewan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa persewaan dan sewa guna usaha tanpa hak opsi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa ketenagakerjaan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa agen perjalanan, penyelenggara tur dan jasa reservasi lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa keamanan dan penyelidikan ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa untuk gedung dan pertamanan ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa administrasi kantor, jasa penunjang kantor dan jasa penunjang usaha lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Administrasi pemerintahan, pertahanan dan jaminan sosial wajib','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa pendidikan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kesehatan manusia','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kegiatan sosial di dalam panti','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa kegiatan sosial di luar panti','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan hiburan, kesenian dan kreativitas','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perpustakaan, arsip, museum dan kegiatan kebudayaan lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan perjudian dan pertaruhan','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan olahraga dan rekreasi lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan keanggotaan organisasi','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa reparasi komputer dan barang keperluan pribadi dan perlengkapan rumah tangga','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa perorangan lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Jasa perorangan yang melayani rumah tangga','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kegiatan badan internasional dan badan ekstra internasional lainnya','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Angkutan Air ','kd_jawaban' => 'F19B', 'id_pertanyaan' => '6', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Penambahan bahan pustaka','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengembangan softskill','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menjaga rasio dosen: mahasiswa yang ideal','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bimbingan karir','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bahan kuliah yang lebih kini','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Peningkatan  kualitas SDM','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Peningkatan Sarana/prasarana','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Membangun jejaring dengan industri','kd_jawaban' => 'F19C', 'id_pertanyaan' => '7', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak','kd_jawaban' => 'F1001', 'id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak, tapi saya sedang menunggu hasil lamaran kerja','kd_jawaban' => 'F1001', 'id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Ya, saya akan mulai bekerja dalam 2 minggu ke depan','kd_jawaban' => 'F1001', 'id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan','kd_jawaban' => 'F1001', 'id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya','kd_jawaban' => 'F1002', 'id_pertanyaan' => '8', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bekerja (full time/part time)','kd_jawaban' => 'F8', 'id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Belum memungkinkan bekerja','kd_jawaban' => 'F8', 'id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Wiraswasta','kd_jawaban' => 'F8', 'id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melanjutkan pendidikan','kd_jawaban' => 'F8', 'id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak kerja tapi sedang mencari kerja','kd_jawaban' => 'F8', 'id_pertanyaan' => '9', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Instansi pemerintah ','kd_jawaban' => 'F1101', 'id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Organisasi non-profit/Lembaga Swadaya Masyarakat','kd_jawaban' => 'F1101', 'id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perusahaan swasta','kd_jawaban' => 'F1101', 'id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Wiraswasta/perusahaan sendiri','kd_jawaban' => 'F1101', 'id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya, tuliskan:','kd_jawaban' => 'F1101', 'id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'BUMN/BUMD','kd_jawaban' => 'F1101', 'id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Institusi / Organisasi Multirateral','kd_jawaban' => 'F1102', 'id_pertanyaan' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Founder','kd_jawaban' => 'F5C', 'id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Co-Founder','kd_jawaban' => 'F5C', 'id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Staff','kd_jawaban' => 'F5C', 'id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Freelance/Kerja Lepas','kd_jawaban' => 'F5C', 'id_pertanyaan' => '11', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lokal/Wilayah/Wiraswasta tidak berbadan hukum','kd_jawaban' => 'F5D', 'id_pertanyaan' => '12', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Nasional/Wiraswasta berbadan hukum','kd_jawaban' => 'F5D', 'id_pertanyaan' => '12', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Multinasional/Internasional','kd_jawaban' => 'F5D', 'id_pertanyaan' => '12', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Biaya Sendiri / Keluarga','kd_jawaban' => 'F1201', 'id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa ADIK','kd_jawaban' => 'F1201', 'id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa BIDIKMISI','kd_jawaban' => 'F1201', 'id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa PPA','kd_jawaban' => 'F1201', 'id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa AFIRMASI','kd_jawaban' => 'F1201', 'id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Beasiswa Perusahaan/Swasta','kd_jawaban' => 'F1201', 'id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya, tuliskan:','kd_jawaban' => 'F1202', 'id_pertanyaan' => '13', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Erat','kd_jawaban' => 'F14', 'id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Erat','kd_jawaban' => 'F14', 'id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup Erat','kd_jawaban' => 'F14', 'id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang Erat','kd_jawaban' => 'F14', 'id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak Sama Sekali ','kd_jawaban' => 'F14', 'id_pertanyaan' => '14', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Setingkat Lebih Tinggi','kd_jawaban' => 'F15', 'id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tingkat yang Sama','kd_jawaban' => 'F15', 'id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Setingkat Lebih Rendah','kd_jawaban' => 'F15', 'id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak Perlu Pendidikan Tinggi','kd_jawaban' => 'F15', 'id_pertanyaan' => '15', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Staff','kd_jawaban' => 'F19D', 'id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Operator / Pelaksana','kd_jawaban' => 'F19D', 'id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Administrasi','kd_jawaban' => 'F19D', 'id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pengawas / Supervisor','kd_jawaban' => 'F19D', 'id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kepala Bagian / Departemen','kd_jawaban' => 'F19D', 'id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Manajer','kd_jawaban' => 'F19D', 'id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Direktur','kd_jawaban' => 'F19D', 'id_pertanyaan' => '16', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat sesuai dengan bidang keilmuan (kompetensi)','kd_jawaban' => 'F19E', 'id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Agak sesuai bidang keilmuan (sifatnya lebih pada keahlian tambahan misalnya bidang IT bagi lulusan non IT)','kd_jawaban' => 'F19E', 'id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak sesuai bidang keilmuan (di luar bidang keilmuan misalnya Sarjana Ekonomi jadi Public Relation)','kd_jawaban' => 'F19E', 'id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak berkaitan sama sekali (misalnya menjadi guru Agama, Rohaniawan, Relawan, dsb)','kd_jawaban' => 'F19E', 'id_pertanyaan' => '17', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Rendah','kd_jawaban' => 'F17A', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Rendah','kd_jawaban' => 'F17A', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sedang','kd_jawaban' => 'F17A', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tinggi','kd_jawaban' => 'F17A', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Tinggi','kd_jawaban' => 'F17A', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Rendah','kd_jawaban' => 'F17B', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Rendah','kd_jawaban' => 'F17B', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sedang','kd_jawaban' => 'F17B', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tinggi','kd_jawaban' => 'F17B', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Tinggi','kd_jawaban' => 'F17B', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Besar','kd_jawaban' => 'F2', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Besar','kd_jawaban' => 'F2', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup Besar','kd_jawaban' => 'F2', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','kd_jawaban' => 'F2', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak Sama Sekali','kd_jawaban' => 'F2', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.','kd_jawaban' => 'F1601', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya belum mendapatkan pekerjaan yang lebih sesuai','kd_jawaban' => 'F1602', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Di pekerjaan ini saya memeroleh prospek karir yang baik.','kd_jawaban' => 'F1603', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.','kd_jawaban' => 'F1604', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.','kd_jawaban' => 'F1605', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. ','kd_jawaban' => 'F1606', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lebih aman/terjamin/secure','kd_jawaban' => 'F1607', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lebih menarik ','kd_jawaban' => 'F1608', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.','kd_jawaban' => 'F1609', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya','kd_jawaban' => 'F16010', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.','kd_jawaban' => 'F16011', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.','kd_jawaban' => 'F16012', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya:','kd_jawaban' => 'F16013', 'id_pertanyaan' => '21', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melalui iklan di koran/majalah, brosur','kd_jawaban' => 'F401', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada','kd_jawaban' => 'F402', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Pergi ke bursa/pameran kerja','kd_jawaban' => 'F403', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Mencari lewat internet/iklan online/milis','kd_jawaban' => 'F404', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Dihubungi oleh perusahaan','kd_jawaban' => 'F405', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menghubungi Kemenakertrans','kd_jawaban' => 'F406', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menghubungi agen tenaga kerja komersial/swasta','kd_jawaban' => 'F407', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas','kd_jawaban' => 'F408', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Menghubungi kantor kemahasiswaan/hubungan alumni','kd_jawaban' => 'F409', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Membangun jejaring (network) sejak masih kuliah','kd_jawaban' => 'F4010', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)','kd_jawaban' => 'F4011', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Membangun bisnis sendiri','kd_jawaban' => 'F4012', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Melalui penempatan kerja atau magang','kd_jawaban' => 'F4013', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah','kd_jawaban' => 'F4014', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya:','kd_jawaban' => 'F4015', 'id_pertanyaan' => '22', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'BUMN','kd_jawaban' => 'P1', 'id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Perusahaan Terbatas (PT)','kd_jawaban' => 'P1', 'id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Koperasi','kd_jawaban' => 'P1', 'id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'CV','kd_jawaban' => 'P1', 'id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Firma /Perusahaan Perorangan','kd_jawaban' => 'P1', 'id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Lainnya','kd_jawaban' => 'P1', 'id_pertanyaan' => '23', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '<50 Orang','kd_jawaban' => 'P2', 'id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '51 - 100 Orang','kd_jawaban' => 'P2', 'id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '101 - 150 Orang','kd_jawaban' => 'P2', 'id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '151 - 300 Orang','kd_jawaban' => 'P2', 'id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '301 - 500 Orang','kd_jawaban' => 'P2', 'id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '>500 Orang','kd_jawaban' => 'P2', 'id_pertanyaan' => '24', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '1.500.000 - 2.000.000','kd_jawaban' => 'P3', 'id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '2.000.000 - 2.500.000','kd_jawaban' => 'P3', 'id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '2.500.000 - 3.000.000','kd_jawaban' => 'P3', 'id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '3.500.000 - 4.000.000','kd_jawaban' => 'P3', 'id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '> 4.000.000','kd_jawaban' => 'P3', 'id_pertanyaan' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Tidak ada','kd_jawaban' => 'P4', 'id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '< 20 Orang','kd_jawaban' => 'P4', 'id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '21 - 40 Orang','kd_jawaban' => 'P4', 'id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '41 - 60 Orang','kd_jawaban' => 'P4', 'id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '61 - 80 Orang','kd_jawaban' => 'P4', 'id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '> 80 Orang','kd_jawaban' => 'P4', 'id_pertanyaan' => '26', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '< 5 Orang','kd_jawaban' => 'P5', 'id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '6 - 15 Orang','kd_jawaban' => 'P5', 'id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '16 - 20 Orang','kd_jawaban' => 'P5', 'id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '21 - 25 Orang','kd_jawaban' => 'P5', 'id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '26 - 30 Orang','kd_jawaban' => 'P5', 'id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => '> 30','kd_jawaban' => 'P5', 'id_pertanyaan' => '27', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','kd_jawaban' => 'P7', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','kd_jawaban' => 'P7', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','kd_jawaban' => 'P7', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','kd_jawaban' => 'P7', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','kd_jawaban' => 'P8', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','kd_jawaban' => 'P8', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','kd_jawaban' => 'P8', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','kd_jawaban' => 'P8', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','kd_jawaban' => 'P9', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','kd_jawaban' => 'P9', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','kd_jawaban' => 'P9', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','kd_jawaban' => 'P9', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','kd_jawaban' => 'P10', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','kd_jawaban' => 'P10', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','kd_jawaban' => 'P10', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','kd_jawaban' => 'P10', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Sangat Baik','kd_jawaban' => 'P11', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Baik','kd_jawaban' => 'P11', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Cukup','kd_jawaban' => 'P11', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
            ['jawaban' => 'Kurang','kd_jawaban' => 'P11', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],            
        ];
        foreach($array as $key => $row){
            DB::table('pilihanjawabans')->insert($row);
        }
    }
}
