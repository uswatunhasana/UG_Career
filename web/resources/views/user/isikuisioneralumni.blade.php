@extends('layouts.masterfrontend')
@section('title', 'Isi Kuisioner Alumni')
@section('css')
@endsection
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="{{ route('isikuisioneralumni', Auth::user()->id) }}">Isi Kuisioner Alumni</a></li>
      </ol>
      <h2>Isi Kuisioner Alumni UG Career</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
    @php
    $responden = \App\Models\Jawabanresponden::where('id_user', Auth::user()->id)->count();
    @endphp
    @if($responden == 0)

      <form role="form" action="{{ route('kuisioneralumni.store') }}" method="POST">
       @csrf
       @method('POST')
       <article class="entry">
        <!-- Identitas -->
        <h2 class="entry-title">
          <a>Bagian 1: Identitas Alumni</a>
        </h2>
        @foreach($alumnis as $alumni)
        <div class="col-md-12">
          <div class="form-group">
            <label for="largeInput">NPM</label>
            <input type="text" class="form-control form-control" id="nomormahasiswa" value="{{ $alumni->npm }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Masuk</label>
            <input type="text" class="form-control form-control"  id="kodept" value="{{ $alumni->tahun_masuk }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Lulus</label>
            <input type="text" class="form-control form-control" id="tahunlulus" value="{{ $alumni->tahun_lulus }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Program Studi/Jurusan</label>
            <input type="text" class="form-control form-control" id="kodeprodi" value="{{ $alumni->prodi->nama_prodi }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nama</label>
            <input type="text" class="form-control form-control" id="nama" value="{{ $alumni->user->name }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nomor Telepon/HP</label>
            <input type="text" class="form-control form-control" id="nomortelepon" value="{{ $alumni->no_telp }}"readonly >
          </div>
          <div class="form-group">
            <label for="largeInput">Email</label>
            <input type="text" class="form-control form-control" id="email" value="{{ $alumni->user->email }}"readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">NIK</label>
            <input type="text" class="form-control form-control"  id="nik" value="{{ $alumni->nik }}"readonly>
          </div>
          <br>
          @endforeach

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
    @else
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Kamu Telah Mengisi Kuisioner!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>
    @endif
  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

@endsection