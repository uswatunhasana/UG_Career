@extends('layouts.masterfrontend')
@section('title', 'Edit Profil')
@section('css')
@endsection
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="#">Edit Profil</a></li>
      </ol>
      <h2>Edit Profil</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-12 entries">
          <article class="entry entry-single">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="largeInput">NPM</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Nama Lengkap</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Tahun Masuk</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Tahun Lulus</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">No. Telepon/HP</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Email</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">NIK</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Username</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Password</label>
                        <input type="text" class="form-control form-control" name = "" id="" value="">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-warning" style="margin-left: 500px;">Ubah data</button>


        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@section('scripts')

<script>
  $(document).ready(function() {
    $('.flex.justify-between.flex-1').remove();
    $('.text-sm.text-gray-700.leading-5').remove();
  });
</script>

@endsection
@endsection
