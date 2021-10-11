@section('title', 'Log in')
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>UG Career | @yield('title')</title>

      <!-- Favicons -->
        <!-- <link href="{{ asset('assets') }}/img/favicon.png" rel="icon"> -->
        <link href="{{ asset('assets') }}/img/favicongundar.png" rel="icon">
        <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link rel="stylesheet" href="{!! asset('login_fe/assets/styles.css') !!}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title alumni">
               Login
            </div>
         </div>
         <div class="form-container">
            <div class="form-inner">
               <form action="{{ route('postlogin') }}" class="alumni" method="POST">
                   {{ csrf_field() }}
                  <div class="field">
                     <input type="text" name="username" placeholder="{{ __('Username or Email') }}" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Lupa password ?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Submit">
                  </div>
                  <div class="perusahaan-link">
                     Belum memiliki akun ? <a href="{{ route('daftar.registrasi') }}">Registrasi Akun</a>
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
