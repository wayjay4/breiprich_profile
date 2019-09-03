@extends('layouts.composer.app')

@section('content')
  <script type="text/JavaScript">
    function setVisibility(objectID,state) {
      var object = document.getElementById(objectID);
      object.style.visibility = state;
    }

    function toggleVisibility(objectID) {
      var object = document.getElementById(objectID);
      state = object.style.visibility
      if (state == 'hidden')
        object.style.visibility = 'visible';
      else {
        if (state == 'visible')
          object.style.visibility = 'hidden';
        else
          object.style.visibility = 'visible';
      }
    }
  </script>

  <div class="main_content" id="comp_content">
    <div id="comp_textArea">

      <div id="comp_textBox">

        <div class="row">
          <div class="col-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-orchestracc-tab" data-toggle="pill" href="#v-pills-orchestracc" role="tab" aria-controls="v-pills-orchestracc" aria-selected="true">
                Orchestra/Chamber, Orchestra/Concerto
              </a>
              <a class="nav-link" id="v-pills-windensemble-tab" data-toggle="pill" href="#v-pills-windensemble" role="tab" aria-controls="v-pills-windensemble" aria-selected="false">
                Wind Ensemble
              </a>
              <a class="nav-link" id="v-pills-choral-tab" data-toggle="pill" href="#v-pills-choral" role="tab" aria-controls="v-pills-choral" aria-selected="false">
                Choral
              </a>
              <a class="nav-link" id="v-pills-vocal-tab" data-toggle="pill" href="#v-pills-vocal" role="tab" aria-controls="v-pills-vocal" aria-selected="false">
                Vocal
              </a>
              <a class="nav-link" id="v-pills-soloduo-tab" data-toggle="pill" href="#v-pills-soloduo" role="tab" aria-controls="v-pills-soloduo" aria-selected="false">
                Solo/Duo
              </a>
              <a class="nav-link" id="v-pills-xchamber-tab" data-toggle="pill" href="#v-pills-xchamber" role="tab" aria-controls="v-pills-xchamber" aria-selected="false">
                Mixed Chamber Ensemble
              </a>
              <a class="nav-link" id="v-pills-electronic-tab" data-toggle="pill" href="#v-pills-electronic" role="tab" aria-controls="v-pills-electronic" aria-selected="false">
                Electronic
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="comp_dataBox">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-orchestracc" role="tabpanel" aria-labelledby="v-pills-orchestracc-tab">
                <div class="comp_itemDetail">
                  <h2>PLUMOUS (2017)</h2>
                  <p>
                    <span class="intruments">chamber orchestra</span>
                    <br />
                    <span class="total_time">11 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>FLOWING WATERS CARESS FALLEN PETAL (2014-2015)</h2>
                  <p>
                    <span class="intruments">piano and orchestra</span>
                    <br />
                    <span class="total_time">23 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SWANS (1989; rev. 2009)</h2>
                  <p>
                    <span class="intruments">chamber orchestra</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SOLITARY TRAVELLER (2008)</h2>
                  <p>
                    <span class="intruments">soprano and orchestra</span>
                    <br />
                    <span class="total_movements">five movements</span>
                    <br />
                    <span class="total_time">40 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE RIVER EMPTIES INTO ... (2006)</h2>
                  <p>
                    <span class="intruments">soprano and orchestra</span>
                    <br />
                    <span class="total_time">14 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>IN THE EYES OF A CHILD (2003)</h2>
                  <p>
                    <span class="intruments">orchestra</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>LULLABY (2001-02)</h2>
                  <p>
                    <span class="intruments">violin and orchestra</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE DAY OF QUIET (2000)</h2>
                  <p>
                    <span class="intruments">string orchestra</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>DUNCAN'S CHARGE (2000)</h2>
                  <p>
                    <span class="intruments">orchestra</span>
                    <br />
                    <span class="total_time">4 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WEEPING WILLOW (1996)</h2>
                  <p>
                    <span class="intruments">soprano and string orchestra</span>
                    <br />
                    <span class="total_movements">English and Turkish versions</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>CRESCENT MOON, MISTY BAMBOOS (1990)</h2>
                  <p>
                    <span class="intruments">baritone, chorus and orchestra</span>
                    <br />
                    <span class="total_movements">four movements</span>
                    <br />
                    <span class="total_time">25 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SPRING ROAD (l982)</h2>
                  <p>
                    <span class="intruments">soprano and chamber orchestra</span>
                    <br />
                    <span class="total_movements">two movements</span>
                    <br />
                    <span class="total_time">16 minutes</span>
                  </p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-windensemble" role="tabpanel" aria-labelledby="v-pills-windensemble-tab">
                <div class="comp_itemDetail">
                  <h2>EMERALD BLUE (1985)</h2>
                  <p>
                    <span class="intruments">chorus and wind ensemble</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>OAK (1983)</h2>
                  <p>
                    <span class="intruments">wind ensemble</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-choral" role="tabpanel" aria-labelledby="v-pills-choral-tab">
                <div class="comp_itemDetail">
                  <h2>NIGHT SLEEPS (2001-02)</h2>
                  <p>
                    <span class="intruments">SATB chorus</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE BREATHING OF NIGHT (1999)</h2>
                  <p>
                    <span class="intruments">chamber choir and Tibetan singing bowls</span>
                    <br />
                    <span class="total_time">15-30 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>DUSK (1998)</h2>
                  <p>
                    <span class="intruments">a cappella choir</span>
                    <br />
                    <span class="total_time">17 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>CRESCENT MOON, MISTY BAMBOOS (1990)</h2>
                  <p>
                    <span class="intruments">baritone, chorus and orchestra</span>
                    <br />
                    <span class="total_movements">four movements</span>
                    <br />
                    <span class="total_time">25 minutes</span>
                  </p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-vocal" role="tabpanel" aria-labelledby="v-pills-vocal-tab">
                <div class="comp_itemDetail">
                  <h2>SOLITARY TRAVELLER (2008)</h2>
                  <p>
                    <span class="intruments">soprano and orchestra</span>
                    <br />
                    <span class="total_movements">five movements</span>
                    <br />
                    <span class="total_time">40 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>CLEAR RAIN (2007)</h2>
                  <p>
                    <span class="intruments">tenor, flute, oboe and piano</span>
                    <br />
                    <span class="total_movements">Chinese text</span>
                    <br />
                    <span class="total_time">6 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE RIVER EMPTIES INTO ... (2006)</h2>
                  <p>
                    <span class="intruments">soprano and orchestra</span>
                    <br />
                    <span class="total_time">14 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WEEPING WILLOW (1996)</h2>
                  <p>
                    <span class="intruments">soprano and string orchestra</span>
                    <br />
                    <span class="total_movements">English and Turkish versions</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WEEPING WILLOW (1996)</h2>
                  <p>
                    <span class="intruments">soprano and string orchestra</span>
                    <br />
                    <span class="intruments">English and Turkish versions</span>
                    <br />
                    <span class="total_movements">three movements</span>
                    <br />
                    <span class="total_time">24 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WEEPING WILLOW (1996)</h2>
                  <p>
                    <span class="intruments">soprano and piano</span>
                    <br />
                    <span class="intruments">English and Turkish versions</span>
                    <br />
                    <span class="total_movements">one movement</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>TWO TURKISH SONGS (1995-96)</h2>
                  <p>
                    <span class="intruments">soprano or tenor, flute, and piano</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WEEPING WILLOW (1993-96)</h2>
                  <p>
                    <span class="intruments">oprano and string quartet</span>
                    <br />
                    <span class="intruments">English and Turkish versions</span>
                    <br />
                    <span class="total_movements">three movements</span>
                    <br />
                    <span class="total_time">24 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>CRESCENT MOON, MISTY BAMBOOS (1990)</h2>
                  <p>
                    <span class="intruments">baritone, chorus and orchestra</span>
                    <br />
                    <span class="total_movements">four movements</span>
                    <br />
                    <span class="total_time">25 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>BLUE GORGE (1985-86)</h2>
                  <p>
                    <span class="intruments">soprano and piano</span>
                    <br />
                    <span class="total_movements">three movements</span>
                    <br />
                    <span class="total_time">12 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SPRING ROAD (1982)</h2>
                  <p>
                    <span class="intruments">soprano and chamber orchestra</span>
                    <br />
                    <span class="total_movements">two movements</span>
                    <br />
                    <span class="total_time">16 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>PARTING (1979)</h2>
                  <p>
                    <span class="intruments">soprano, two alto flutes, violin, viola, cello</span>
                    <br />
                    <span class="total_movements">five movements</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-soloduo" role="tabpanel" aria-labelledby="v-pills-soloduo-tab">
                <div class="comp_itemDetail">
                  <h2>DELIQUESCENT (2018)</h2>
                  <p>
                    <span class="intruments">violoncello and piano</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE HEART OF THINGS (2017)</h2>
                  <p>
                    <span class="intruments">violin and piano</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>LUCULENT (2016)</h2>
                  <p>
                    <span class="intruments">two pianos</span>
                    <br />
                    <span class="total_time">7 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>LUCULENT (2016)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">7 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>EVANESCENCE (2015)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">6 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>BLUE HERON, WAITING (2014)</h2>
                  <p>
                    <span class="intruments">guitar</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WILDFLOWERS (2012-2013)</h2>
                  <p>
                    <span class="intruments">viola with recorded and live electronics</span>
                    <br />
                    <span class="total_time">13 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WHEN THE PINES SLEEP IT IS AUTUMN (2011)</h2>
                  <p>
                    <span class="intruments">bassoon duo</span>
                    <br />
                    <span class="total_movements">two movements</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE MOON, GEESE FLYING HOME (2012)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">12 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>A NECKLACE OF DEW (2011)</h2>
                  <p>
                    <span class="intruments">clarinet and alto saxophone with live electronics</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WHEN THE PINES SLEEP IT IS AUTUMN (2011)</h2>
                  <p>
                    <span class="intruments">bassoon duo</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THROUGH THE SCENTED GRASSES AND BROKEN MISTS (2011)</h2>
                  <p>
                    <span class="intruments">soprano saxophone and CD playback</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>FLOWING WATERS CARESS FALLEN PETAL (2010)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">7 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>BECOMING BLOSSOM (2010)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">6 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>HE CLOUDS WERE CHASING THE WIND (2009)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>GRAY CLOUDS PARTING (2009)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE LEAVES ARE GONE (2005-2008)</h2>
                  <p>
                    <span class="intruments">bass flute and percussion (1)</span>
                    <br />
                    <span class="total_time">17 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THROUGH THE SCENTED GRASSES AND BROKEN MISTS (2008)</h2>
                  <p>
                    <span class="intruments">soprano saxophone and piano</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>A THOUSAND GRASSES BEND WITH DEW (2007)</h2>
                  <p>
                    <span class="intruments">percussion duo</span>
                    <br />
                    <span class="total_time">7 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE SCENT OF BLOSSOM (2007)</h2>
                  <p>
                    <span class="intruments">viola or violoncello or alto saxophone and piano</span>
                    <br />
                    <span class="total_time">14 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE ICE SHOOTS FLAME (2005)</h2>
                  <p>
                    <span class="intruments">percussion duo and CD playback</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>MOON IN BLUE SHADOWS (2005)</h2>
                  <p>
                    <span class="intruments">flute and piano</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>ONE DAY THE LEAVES ARE GONE (2005)</h2>
                  <p>
                    <span class="intruments">bass flute or any number of flutes</span>
                    <br />
                    <span class="total_time">10-15 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>IN A RAINDROP . . . THE MOON (1998)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>CRANE IN BLUE MIST (1998)</h2>
                  <p>
                    <span class="intruments">flute and piano</span>
                    <br />
                    <span class="total_time">4 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>UTUMN (1993)</h2>
                  <p>
                    <span class="intruments">clarinet and piano</span>
                    <br />
                    <span class="total_time">14 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>ACROSS THE CELESTIAL RIVER (1992)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">11 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WATER LEAVES (1991)</h2>
                  <p>
                    <span class="intruments">guitar duo</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WATER LEAVES (1991)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_time">5 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>DRAGONFLIES (1989)</h2>
                  <p>
                    <span class="intruments">guitar</span>
                    <br />
                    <span class="total_movements">two movements</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SUMMER, DOVES AND YELLOW ROSES (1989)</h2>
                  <p>
                    <span class="intruments">organ</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>GREEN POND (1988)</h2>
                  <p>
                    <span class="intruments">viola and piano</span>
                    <br />
                    <span class="total_time">11 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>GRAY CLOUDS PARTING (1987)</h2>
                  <p>
                    <span class="intruments">harp</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>BIRCHES (1986)</h2>
                  <p>
                    <span class="intruments">piano</span>
                    <br />
                    <span class="total_movements">three movements</span>
                    <br />
                    <span class="total_time">14 minutes</span>
                  </p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-xchamber" role="tabpanel" aria-labelledby="v-pills-xchamber-tab">
                <div class="comp_itemDetail">
                  <h2>PLUMOUS (2018)</h2>
                  <p>
                    <span class="intruments">flute, clarinet, violin, viola, violoncello, vibraphone and piano</span>
                    <br />
                    <span class="total_time">11 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>TRANSLUCENT (2015-2016)</h2>
                  <p>
                    <span class="intruments">flute, clarinet, vibraphone, marimba and piano</span>
                    <br />
                    <span class="total_time">17 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>LAMBENT (2014-2015)</h2>
                  <p>
                    <span class="intruments">alto flute, vibraphone and piano</span>
                    <br />
                    <span class="total_time">12 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WITHIN A VEIL OF MIST (2014-2015)</h2>
                  <p>
                    <span class="intruments">violin, violoncello and piano</span>
                    <br />
                    <span class="total_time">1 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WILDFLOWERS (2015)</h2>
                  <p>
                    <span class="intruments">viola accompanied by two violins, violoncello and with recorded and live electronics</span>
                    <br />
                    <span class="total_time">13 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>AMONG DISTANT FIELDS (2012)</h2>
                  <p>
                    <span class="intruments">violin, percussion(1) and piano</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>S MEMORY PASSES (2011)</h2>
                  <p>
                    <span class="intruments">woodwind or string instrument, percussion(2), piano, with or without live electronics</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>ABOVE THE DISTANT RIVER, MIST (2011)</h2>
                  <p>
                    <span class="intruments">violin, percussion(1) and piano</span>
                    <br />
                    <span class="total_time">14 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>KNOTS (2010)</h2>
                  <p>
                    <span class="intruments">free improvisation soloist and percussion(3-4)</span>
                    <br />
                    <span class="total_time">9-20 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WITHIN THE GLISTENING MIST (2010)</h2>
                  <p>
                    <span class="intruments">saxophone quartet</span>
                    <br />
                    <span class="total_time">13 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>HE WILLOWS ARE WHISPERING (2010)</h2>
                  <p>
                    <span class="intruments">violin, guitar and piano</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>A THOUSAND GRASSES BEND WITH DEW (2009)</h2>
                  <p>
                    <span class="intruments">flute, clarinet, horn, trumpet, trombone, percussion (2), piano and bass</span>
                    <br />
                    <span class="total_movements">two movements</span>
                    <br />
                    <span class="total_time">12 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>I LINGERED AMONG THE HAWTHORNS (2006)</h2>
                  <p>
                    <span class="intruments">flute, viola or English horn, and harp or piano</span>
                    <br />
                    <span class="total_time">12 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>ONE DAY THE LEAVES ARE GONE (2005)</h2>
                  <p>
                    <span class="intruments">bass flute or any number of flutes</span>
                    <br />
                    <span class="total_time">10-15 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SOLDIERS (2003)</h2>
                  <p>
                    <span class="intruments">computer generated composition with or without live performers</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>OLD POND (2003)</h2>
                  <p>
                    <span class="intruments">bass or alto flute, clarinet, violin, violoncello, and piano</span>
                    <br />
                    <span class="total_time">14 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>GRAY CLOUDS PARTING (2002)</h2>
                  <p>
                    <span class="intruments">variable ensemble<</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SLEEP'S SHIFTING DARKNESS (2001)</h2>
                  <p>
                    <span class="intruments">computer generated composition with or without live performers</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>DUNCAN'S CHARGE (2000)</h2>
                  <p>
                    <span class="intruments">brass quintet</span>
                    <br />
                    <span class="total_time">4 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>CHOZUBACHI (1998-2000)</h2>
                  <p>
                    <span class="intruments">piano trio</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>IN A RAINDROP . . . THE MOON (1995)</h2>
                  <p>
                    <span class="intruments">guitar trio</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SHISHI - ODOSHI (1995)</h2>
                  <p>
                    <span class="intruments">flute, percussion and piano or harp</span>
                    <br />
                    <span class="total_time">12 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>DUNCAN'S CHARGE (1992)</h2>
                  <p>
                    <span class="intruments">two trumpets, trombone, bass trombone, piano or organ, two percussionists (optional)</span>
                    <br />
                    <span class="total_time">4 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>WHERE ARE YOU HIDING, MY LITTLE CRICKET? (1990)</h2>
                  <p>
                    <span class="intruments">flute, clarinet, guitar or harp, percussion</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>BLOSSOM II (1988)</h2>
                  <p>
                    <span class="intruments">one or more marimbas</span>
                    <br />
                    <span class="total_time">7 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>BLOSSOM (1987)</h2>
                  <p>
                    <span class="intruments">brass choir</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-electronic" role="tabpanel" aria-labelledby="v-pills-electronic-tab">
                <div class="comp_itemDetail">
                  <h2>AS MEMORY PASSES (2011)</h2>
                  <p>
                    <span class="intruments">woodwind or string instrument, percussion(2), piano, with or without live electronics</span>
                    <br />
                    <span class="total_time">0 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>A NECKLACE OF DEW (2011)</h2>
                  <p>
                    <span class="intruments">clarinet and alto saxophone with live electronics</span>
                    <br />
                    <span class="total_time">8 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THROUGH THE SCENTED GRASSES AND BROKEN MISTS (2011)</h2>
                  <p>
                    <span class="intruments">soprano saxophone and CD playback</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>THE ICE SHOOTS FLAME (2005)</h2>
                  <p>
                    <span class="intruments">percussion duo and CD playback</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SOLDIERS (2003)</h2>
                  <p>
                    <span class="intruments">computer generated composition with or without live performers</span>
                    <br />
                    <span class="total_time">10 minutes</span>
                  </p>
                </div>

                <div class="comp_itemDetail">
                  <h2>SLEEP'S SHIFTING DARKNESS (2001)</h2>
                  <p>
                    <span class="intruments">computer generated composition with or without live performers</span>
                    <br />
                    <span class="total_time">9 minutes</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
