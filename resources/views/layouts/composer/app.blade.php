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
      // local vars
      var clickCount = 0;
      var media = $("#audio_player")[0];
      var navLink = $("nav a.nav-link");
      var home_url;

      $.each(navLink, function(key, value){
        // get and set home_url
        if(value.text.toLowerCase() == "home"){
          home_url = $(value).attr("href")+"/";
        }

        // set active navbar link
        if(value == document.URL){
          $(navLink[key]).addClass("active");
        }
        else{
          $(navLink[key]).removeClass("active");
        }
      });

      // on page click start media player
      $(document).on("click", function(event){
        // if clickCount is zero, then increment count and start player
        // else, do nothing
        if(clickCount === 0 && document.URL === home_url){
          clickCount++;
          media.play().catch(function(error) {
              // if error captured, then display data for trouble shooting
              console.log("There was an error processing audio playback!");
              console.log("error:"); console.dir(error);
          });
        }
      });

      if(document.URL === home_url){
        $("#div_audioplayer").attr("hidden", false);
        media.hidden = false;
        display_audioTrack();
      }

      // set onplay listener: show media player and track_name
      media.onplay = function(){
        display_audioTrack();
      };

      // onclick play the selected audio track
      $("a.audio_track").on("click", function(event){
        // prevent link event
        event.preventDefault();

        // set media's music file source, unmute, load, and play it
        playMediaFile($(event.currentTarget).attr("href"));
      });

      $("#comp_dataBox").scroll(function(){
        if ($(this).scrollTop() >= 170) {
            //actions...
            //console.log("you're too far fool!");
        } else {
            //actions...
            //console.log("give me some space please!");
        }
      });

      $("div#comp_textBox .nav-link, div#bio_textBox .nav-link").on("click", function(event){
        // local vars
        var target_div, url;

        target_div = $(event.target).attr("href");
        url = document.URL;

        setTimeout(function(){
          window.location.href = target_div;
          history.replaceState(null,null,url);
          setTimeout(function(){
            $(window).scrollTop(0);
          }, 500);
        }, 500);
      });

      function display_audioTrack(){
        // pull src file name from media player and replace '_' with spaces and set to track_name
        var track_name = media.currentSrc.split('\\').pop().split('/').pop().replace(/\_/g," ");

        // show media player
        $("#div_audioplayer").attr("hidden", false);
        media.hidden = false;

        // place track_name in html for display and capitalize first letters
        $("#track_name").html(track_name);
      }

      function playMediaFile(src){
        // set media's music file source, unmute, load, and play it
        media.src = src;
        $("#audio_source").attr("src", src);
        display_audioTrack();
        media.muted = false;
        media.load();
        media.play().catch(function(error) {
            // if error captured, then display data for trouble shooting
            console.log("There was an error processing audio playback!");
            console.log("error:"); console.dir(error);
        });
      }

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
</body>
</html>
