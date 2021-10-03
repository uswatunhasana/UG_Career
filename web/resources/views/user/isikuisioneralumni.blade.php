@extends('layouts.masterfrontend')
@section('title', 'Isi Kuisioner')
@section('css')
@endsection
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="{{ route('isikuisionerrr') }}">Isi Kuisioner Alumni</a></li>
      </ol>
      <h2>Isi Kuisioner Alumni UG Career</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <form role="form" action="" method="POST">
       @csrf
       @method('PUT')
       <article class="entry">
        <!-- Identitas -->
        <h2 class="entry-title">
          <a>Bagian 1: Identitas Alumni</a>
        </h2>
        
        <div class="col-md-6">

          <div class="form-group">
            <label for="largeInput">Nomor Mahasiswa</label>
            <input type="text" class="form-control form-control" name = "nomormahasiswa" id="nomormahasiswa" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">Kode PT</label>
            <input type="text" class="form-control form-control" name = "kodept" id="kodept" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Lulus</label>
            <input type="text" class="form-control form-control" name = "tahunlulus" id="tahunlulus" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">Kode Prodi</label>
            <input type="text" class="form-control form-control" name = "kodeprodi" id="kodeprodi" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">Nama</label>
            <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">Nomor Telepon/HP</label>
            <input type="text" class="form-control form-control" name = "nomortelepon" id="nomortelepon" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">Email</label>
            <input type="text" class="form-control form-control" name = "email" id="email" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">NIK</label>
            <input type="text" class="form-control form-control" name = "nik" id="nik" value="">
          </div>
          <div class="form-group">
            <label for="largeInput">NPWP</label>
            <input type="text" class="form-control form-control" name = "npwp" id="npwp" value="">
          </div>
          <br>

          <!-- Tracer Study -->
          <h2 class="entry-title"><a>Bagian 2: Tracer Study</a></h2>
          <!-- Kuisioner Wajib -->
          <h4><a style="color: red;">Kuisioner Wajib</a></h4>

          <b>1. Jelaskan status Anda saat ini?</b>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Bekerja (full time/part time)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Belum memungkinkan bekerja
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Wiraswasta
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Melanjutkan pendidikan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Tidak kerja tapi sedang mencari kerja
            </label>
          </div>
          <br>

          <b>2. Apakah anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus?</b>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Ya
              </label>
            </div>
            <div class="form-group">
              <label for="largeInput">Dalam berapa bulan anda mendapatkan pekerjaan?</label>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <div class="form-group">
              <label for="largeInput">Berapa rata-rata pendapatan anda per bulan? (take home pay)?</label>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Tidak
              </label>
            </div>
            <div class="form-group">
              <label for="largeInput">Dalam berapa bulan anda mendapatkan pekerjaan?</label>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <br>

            <b>3. Dimana lokasi tempat Anda bekerja?</b>
            <div class="form-group">
              <label for="largeInput">Provinsi</label>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <div class="form-group">
              <label for="largeInput">Kab/Kota</label>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <br>

            <b>Silahkan download data referensi wilayah</b>
            <div><a href="#" class="link-primary">Data referensi Provinsi</a></div>
            <div><a href="#" class="link-primary">Data referensi Kab/Kota</a></div>
            <br>

            <b>4. Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</b>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Instansi pemerintah 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Organisasi non-profit/Lembaga Swadaya Masyarakat 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Perusahaan swasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Wiraswasta/perusahaan sendiri
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lainnya, tuliskan:
              </label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                BUMN/BUMD
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Institusi / Organisasi Multirateral
              </label>
            </div>
            <br>

            <div class="form-group">
              <b>5. Apa nama perusahaan/kantor tempat Anda bekerja?</b>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <br>

            <b>6. Bila berwiraswasta, apa posisi/jabatan Anda saat ini ?</b>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Founder 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Co-Founder 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Staff
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Freelance/Kerja Lepas
              </label>
            </div>
            <br>

            <p><b>belom kelar</b></p>
            
            <h4><a style="color: black;">Kuisioner Opsional</a></h4>

          </article><!-- End blog entry -->
        </form>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @endsection