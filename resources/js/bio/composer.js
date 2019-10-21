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
