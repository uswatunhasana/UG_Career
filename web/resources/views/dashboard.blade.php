@extends('layouts.masterfrontend')
@section('title', 'Dashboard')
@section('css')
<style>
  #frame-image img {
    
    max-height: 320px;
    position: absolute;
    left: -10px;
    top: -86px;
}
</style>
@endsection
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{ asset('assets') }}/img/hero-img.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main id="main">
<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Kerjasama</h2>
      <p>Perusahaan Terdaftar</p>
    </header>

    <div class="clients-slider swiper-container">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-1.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-2.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-3.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-4.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-5.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-6.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-7.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-8.png" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

</section><!-- End Clients Section -->

<!-- ======= Isi Kuisioner Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Who We Are</h3>
          <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
          <p>
            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
          </p>
          <div class="text-center text-lg-start">
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Read More</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('assets') }}/img/about.jpg" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- Berita -->
<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Berita</h2>
      <p>Berita Terbaru</p>
    </header>

    <div class="row">
    
    @foreach($beritas as $berita)
      <div class="col-lg-4">
        <div class="post-box">
          <div class="post-img frame-image img"><img src="{{ asset('img/'. $berita->foto )}}" class="img-fluid rounded" width="300px"alt=""></div>
          <span class="post-date">{{ tanggal_indonesia($berita->created_at) }}</span>
          <h3 class="post-title">{{ $berita->judul_berita }}</h3>
          <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      @endforeach

    </div>

  </div>

</section><!-- End Recent Blog Posts Section -->
<!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

<div class="container" data-aos="fade-up">

<header class="section-header">
<h2>F.A.Q</h2>
<p>Frequently Asked Questions</p>
</header>

<div class="row">
<div class="col-lg-6">
  <!-- F.A.Q List 1-->
  <div class="accordion accordion-flush" id="faqlist1">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
          Non consectetur a erat nam at lectus urna duis?
        </button>
      </h2>
      <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
        <div class="accordion-body">
          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
          Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
        </button>
      </h2>
      <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
        <div class="accordion-body">
          Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
          Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
        </button>
      </h2>
      <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
        <div class="accordion-body">
          Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
        </div>
      </div>
    </div>

  </div>
</div>

<div class="col-lg-6">

  <!-- F.A.Q List 2-->
  <div class="accordion accordion-flush" id="faqlist2">

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
          Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
        </button>
      </h2>
      <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
        <div class="accordion-body">
          Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
          Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
        </button>
      </h2>
      <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
        <div class="accordion-body">
          Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
          Varius vel pharetra vel turpis nunc eget lorem dolor?
        </button>
      </h2>
      <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
        <div class="accordion-body">
          Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
        </div>
      </div>
    </div>

  </div>
</div>

</div>

</div>
</section><!-- End F.A.Q Section -->    
<!-- ======= Recent Blog Posts Section ======= -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Hubungi</h2>
      <p>Kontak Kami</p>
    </header>
    @foreach($datawebs as $dataweb)
    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>{{ $dataweb->alamat}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Nomor Telepon</h3>
              <p>{{ $dataweb->no_telp }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
          <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>{{ $dataweb->email }}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Jam Pelayanan</h3>
              <p>{{ $dataweb->jam_pelayanan }}</p>
            </div>
          </div>
          @endforeach
          </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection