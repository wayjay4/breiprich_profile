<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/all_scripts.js') }}"></script>


  <script>
    $(document).ready(function($){
      var media = $("#my_audio")[0];

      // on page click start audio_player
      $(document).on("click", function(event){
        media.play().catch(function(error) {
            // if error captured, then display data for trouble shooting
            console.log("There was an error processing audio playback!");
            console.log("error:"); console.dir(error);
        });
      });

      media.onplay = function(){
        console.log("Now playing: "+media.currentSrc);
        $("#div_audio")[0].hidden = false;
        media.hidden = false;
      };

      var navLink = $("nav a.nav-link");
      $.each(navLink, function(key, value){
        if(value == document.URL){
          $(navLink[key]).addClass("active");
        }
        else{
          $(navLink[key]).removeClass("active");
        }
      });

    });
  </script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
  <link href="{{ asset('css/composer.css') }}" rel="stylesheet">
  <!--
  <link href="{{ asset('css/all_styles.css') }}" rel="stylesheet" >
  -->
</head>

<body class="text-center">
  <div id="app" class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">{{ config('app.name') }}</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link link" href="{{ url('/music_home') }}">Home</a>
          <a class="nav-link link" href="{{ url('/biography') }}">Biography</a>
          <a class="nav-link link" href="{{ url('/recordings') }}">Recordings</a>
          <a class="nav-link link" href="{{ url('/scores') }}">Compositions</a>
          <a class="nav-link link" href="{{ url('/audio') }}">Audio Excerpts</a>
          <a class="nav-link link" href="{{ url('/reviews') }}">Reviews</a>
          <a class="nav-link link" href="{{ url('/contact') }}">Contact</a>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      @yield('content')
    </main>

    <footer class="mastfoot mt-auto">
      <div id="div_audio">
        <audio id="my_audio" controls autoplay loop preload hidden muted style="display:inline-block; margin:5px; height:30px;">
          <source src="../music/homepage_music-old_pond.mp3" type="audio/mpeg">
          Error: your web browser does not support this audio player.
        </audio>
      </div>

      <div class="inner">
        <p>Copyright &copy; <a href="{{ url('/music_home') }}">{{ config('app.name') }}</a>, by <a href="http://waylondixon.com">@waylondixon</a>.</p>
      </div>
    </footer>
  </div>
</body>
</html>
