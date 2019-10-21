<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap/cover.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bio/composer.css') }}" rel="stylesheet">
  <!--
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <style type="text/css">
    #spinner {
      position:absolute;
      top:50%;
      left:50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body class="text-center">
  <div id="app" class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">{{ config('app.name') }}</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link link" href="{{ url('/') }}">Home</a>
          <a class="nav-link link" href="{{ url('/biography') }}">Biography</a>
          <a class="nav-link link" href="{{ url('/recordings') }}">Recordings</a>
          <a class="nav-link link" href="{{ url('/scores') }}">Compositions</a>
          <!-- <a class="nav-link link" href="{{ url('/audio') }}">Audio Excerpts</a> -->
          <a class="nav-link link" href="{{ url('/reviews') }}">Reviews</a>
          <a class="nav-link link" href="{{ url('/contact') }}">Contact</a>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      @yield('content')
    </main>

    <footer class="mastfoot mt-auto">
      <div id="div_audioplayer" hidden>
        <audio id="audio_player" controls loop preload hidden style="display:inline-block; margin:15px; height:30px;">
          <source id="audio_source" src="{{asset('music/xchamber/'.'old_pond.mp3')}}" type="audio/mpeg">
          Error: your web browser does not support this audio player.
        </audio>
        <div id="div_track">
          <span id="track_name"></span>
        </div>
      </div>

      <div id="spinner" style="display:none;">
        <img width="150" height="150" id="img-spinner" src="{{asset('images/'.'preloader.gif')}}" alt="Loading" />
      </div>

      <div class="inner">
        <p>Copyright &copy; <a href="{{ url('/') }}">{{ config('app.name') }}</a>, by <a href="http://waylondixon.com">@waylondixon</a>.</p>
      </div>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/react/App.js') }}"></script>
  <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
  <script src="{{ asset('js/vendors/AC_RunActiveContent.js') }}"></script>
  <script src="{{ asset('js/bio/composer.js') }}"></script>

  <script>

  </script>

  @yield('addtl_scripts')
</body>
</html>
