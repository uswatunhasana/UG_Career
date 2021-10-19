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
        
        <div class="col-md-12">

          <div class="form-group">
            <label for="largeInput">NPM</label>
            <input type="text" class="form-control form-control" name = "nomormahasiswa" id="nomormahasiswa" value="" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Masuk</label>
            <input type="text" class="form-control form-control" name = "kodept" id="kodept" value="" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Lulus</label>
            <input type="text" class="form-control form-control" name = "tahunlulus" id="tahunlulus" value="" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Program Studi/Jurusan</label>
            <input type="text" class="form-control form-control" name = "kodeprodi" id="kodeprodi" value="" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nama</label>
            <input type="text" class="form-control form-control" name = "nama" id="nama" value="" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nomor Telepon/HP</label>
            <input type="text" class="form-control form-control" name = "nomortelepon" id="nomortelepon" value=""readonly >
          </div>
          <div class="form-group">
            <label for="largeInput">Email</label>
            <input type="text" class="form-control form-control" name = "email" id="email" value=""readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">NIK</label>
            <input type="text" class="form-control form-control" name = "nik" id="nik" value=""readonly>
          </div>
          <br>

          <!-- Tracer Study -->
          <h2 class="entry-title"><a>Bagian 2: Tracer Study</a></h2>
          <!-- Kuisioner Wajib -->
          <h4><a style="color: red;">Kuisioner Wajib</a></h4>
          <br/>

        @foreach($pertanyaans as $pertanyaan)
        @if($pertanyaan->jenis_pertanyaan == 'text')
        <div class="form-group">
            <label for="{{ $pertanyaan->kd_pertanyaan }}"><b>{{ $loop->index+1 }}. {{ $pertanyaan->pertanyaan }}</b></label>
            <input type="text" class="form-control form-control" name = "{{ $pertanyaan->kd_pertanyaan }}" id="{{ $pertanyaan->kd_pertanyaan }}" value="">
            <br/>
        </div>
        @elseif($pertanyaan->jenis_pertanyaan == 'pilihan')
        <div class="form-group">
            <label for="{{ $pertanyaan->kd_pertanyaan }}" ><b>{{ $loop->index+1 }}. {{ $pertanyaan->pertanyaan }}</b></label>
            @if($pertanyaan->is_cabang == 'ya')
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text"><b>No.</b></th>
                  @foreach( $pertanyaan->pilihanjawaban as $pilihanjawaban)
                  <th scope="col" class="text" style="color: red;"><b>{{ $pilihanjawaban->jawaban}}</b></th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach( $pertanyaan->pertanyaan_cabang as $pertanyaan_cabang)
                <tr>
                  <th>{{ $pertanyaan_cabang->pertanyaan_cabang}}</th>
                  @foreach( $pertanyaan->pilihanjawaban as $pilihanjawaban)
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="{{$pertanyaan_cabang->kd_cabang}}" id="{{$pertanyaan_cabang->kd_cabang}}" value="{{$pilihanjawaban->jawaban}}">
                      <label class="form-check-label" for="{{$pertanyaan_cabang->kd_cabang}}"></label>
                    </div>
                  </td>
                  @endforeach
                </tr>
                @endforeach
              </tbody>
            </table>
            <br>
            @else
            @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
            <div class="form-check">
              <input class="form-check-input" type="radio" name="{{ $pertanyaan->kd_pertanyaan }}" id="{{ $pertanyaan->kd_pertanyaan }}" value="{{$pilihanjawaban->jawaban}}">
              <label class="form-check-label" for="{{ $pertanyaan->kd_pertanyaan }}">
              {{ $pilihanjawaban->jawaban }}
              </label>
            </div>
            @endforeach
            @endif
            <br/>
        </div>
        @else
            <label for="{{ $pertanyaan->kd_pertanyaan }}"><b>{{ $loop->index+1 }}. {{ $pertanyaan->pertanyaan }}</b></label>
        @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="{{$pilihanjawaban->jawaban}}" name="{{ $pertanyaan->kd_pertanyaan }}" id="{{ $pertanyaan->kd_pertanyaan }}" >
              <label class="form-check-label" for="{{ $pertanyaan->kd_pertanyaan }}">
              {{ $pilihanjawaban->jawaban }}
              </label>
            </div>
            @endforeach
            <br/>
        @endif
        @endforeach
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </article><!-- End blog entry -->
    </form>
  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

@endsection