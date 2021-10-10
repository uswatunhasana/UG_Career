@section('title', 'Registrasi')
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>UG Career | @yield('title')</title>

      <!-- Favicons -->
        <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
        <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link rel="stylesheet" href="{!! asset('login_fe/assets/styles.css') !!}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title alumni">
               Registrasi
            </div>
            <div class="title perusahaan">
               Registrasi
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="alumni" checked>
               <input type="radio" name="slide" id="perusahaan">
               <label for="alumni" class="slide alumni">Alumni</label>
               <label for="perusahaan" class="slide perusahaan">Perusahaan</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="{{ route('store') }}" class="alumni" method="POST">
                  @csrf
						@method('POST')
                  <div class="field">
                     <input type="text" placeholder="Masukkan NPM" name="" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Masukkan Tahun Masuk" name="" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Masukkan Tahun Lulus" name="" required>
                  </div>
                  <div class="field">
                     <label style="color : #999;"><h3><b>Program Studi/Jurusan</b></h3></label>
                     <select class="form-control" name="id_prodi" required="required" style="">
                     <option disabled selected>-- Daftar Prodi --</option>
                     @foreach ($prodis as $prodi)
                     <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
                     @endforeach
                     </select>
                  </div>
                  <br>
                  <br>
                  <div class="field">
                     <input type="text" placeholder="Masukkan Nama Lengkap" name="" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Masukkan No.Telepon/handphone" name="" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Masukkan Email" name="" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Masukkan NIK" name="" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Submit">
                  </div>
                  <div class="perusahaan-link">
                     Sudah memiliki akun ? <a href="{{ route('login.index') }}">Log in</a>
                  </div>
               </form>
               <form action="#" class="perusahaan">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Lupa password ?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Submit">
                  </div>
                  <div class="perusahaan-link">
                     Sudah memiliki akun ? <a href="{{ route('login.index') }}">Log in</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const alumniText = document.querySelector(".title-text .alumni");
         const alumniForm = document.querySelector("form.alumni");
         const alumniBtn = document.querySelector("label.alumni");
         const perusahaanBtn = document.querySelector("label.perusahaan");
         const perusahaanLink = document.querySelector("form .perusahaan-link a");
         perusahaanBtn.onclick = (()=>{
           alumniForm.style.marginLeft = "-50%";
           alumniText.style.marginLeft = "-50%";
         });
         alumniBtn.onclick = (()=>{
           alumniForm.style.marginLeft = "0%";
           alumniText.style.marginLeft = "0%";
         });
         perusahaanLink.onclick = (()=>{
           perusahaanBtn.click();
           return false;
         });
      </script>
   </body>
</html>
