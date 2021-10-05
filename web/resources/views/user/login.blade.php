
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login UG Tracer</title>

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{!! asset('login_fe/assets/fonts/material-icon/css/material-design-iconic-font.min.css') !!}">

    <!-- Main css -->
    <link rel="stylesheet" href="{!! asset('login_fe/assets/css/style.css') !!}">
</head>
<body>

    <div class="main">

        <h1>Sign In</h1>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" class="signup-form" action="{{ route('postlogin') }}">
                    {{ csrf_field() }}
                    <h2 class="form-title">LOGIN</h2>

                    <div class="form-textbox">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" />
                    </div>

                    <div class="form-textbox">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" />
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Submit" />
                    </div>
                </form>

                <p class="loginhere">
                    Belum mempunyai akun ?<a href="{{ route('daftar.registrasi') }}" class="loginhere-link"> Daftar Akun</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{!! asset('login_fe/assets/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('login_fe/assets/js/main.js') !!}"></script>
</body>
</html>