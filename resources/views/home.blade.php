<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>

    <!-- Custom CSS dan JS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/script6.js') }}"></script>
    <script src="{{ asset('styles/tailwindcss3.4.1.js') }}"></script>


    <!-- Google Fonts & Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="navbar">
        <img src="{{ asset('images/Oceara pUTIH.png') }}" class="logo">

        <nav>
          <a href="{{ url('/home') }}">HOME</a>
          <a href="{{ url('/destinasi') }}">DESTINASI</a>
          <a href="{{ url('/promo') }}">PROMO</a>
        </nav>

        <a href="{{ url('/login') }}" id="user">
          <img src="{{ asset('images/user-circle-fill.png') }}">
        </a>

        <div class="search-bar">
          <input class="search-text" type="text" />
          <button type="submit" class="material-symbols-outlined">search</button>
        </div>
      </div>
    </header>

    <img src="{{ asset('images/JUDUL.png') }}" alt="judul" class="judul">
  </body>
</html>
