<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}" />
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <strong><h1>SIGN IN</h1></strong>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Kata Sandi" required />
        <input type="submit" value="MASUK" />
      </form>

      <span>Lupa password</span>
      <a href="{{ url('/register') }}" id="user">Daftar akun</a>
      <div class="or">---------</div>
      <a><img src="{{ asset('images/Oceara.png') }}" alt="Logo" /></a>
    </div>
  </body>
</html>
