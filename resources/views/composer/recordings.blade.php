@extends('layouts.composer.app')

@section('content')
  <div class="main_content" id="rec_content">
    <div id="rec_textArea">
      <div id="rec_textBox">
        <div class="row">
          <div class="col-10">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-item01-tab" data-toggle="pill" href="#v-pills-item01" role="tab" aria-controls="v-pills-item01" aria-selected="true">
                A Necklace of Dew
              </a>
              <a class="nav-link" id="v-pills-item02-tab" data-toggle="pill" href="#v-pills-item02" role="tab" aria-controls="v-pills-item02" aria-selected="false">
                Swans
              </a>
              <a class="nav-link" id="v-pills-item03-tab" data-toggle="pill" href="#v-pills-item03" role="tab" aria-controls="v-pills-item03" aria-selected="false">
                Sleep's Shifting Darkness
              </a>
              <a class="nav-link" id="v-pills-item04-tab" data-toggle="pill" href="#v-pills-item04" role="tab" aria-controls="v-pills-item04" aria-selected="false">
                Dusk
              </a>
              <a class="nav-link" id="v-pills-item05-tab" data-toggle="pill" href="#v-pills-item05" role="tab" aria-controls="v-pills-item05" aria-selected="false">
                Blue Gorge
              </a>
              <a class="nav-link" id="v-pills-item06-tab" data-toggle="pill" href="#v-pills-item05" role="tab" aria-controls="v-pills-item06" aria-selected="false">
                Weeping Willow
              </a>
              <a class="nav-link" id="v-pills-item07-tab" data-toggle="pill" href="#v-pills-item05" role="tab" aria-controls="v-pills-item07" aria-selected="false">
                Two Turkish Songs
              </a>
              <a class="nav-link" id="v-pills-item08-tab" data-toggle="pill" href="#v-pills-item08" role="tab" aria-controls="v-pills-item08" aria-selected="false">
                Water Leaves
              </a>
              <a class="nav-link" id="v-pills-item09-tab" data-toggle="pill" href="#v-pills-item09" role="tab" aria-controls="v-pills-item09" aria-selected="false">
                Swans
              </a>
              <a class="nav-link" id="v-pills-item10-tab" data-toggle="pill" href="#v-pills-item10" role="tab" aria-controls="v-pills-item10" aria-selected="false">
                Beneath the Tide
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="rec_dataBox">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-item01" role="tabpanel" aria-labelledby="v-pills-item01-tab">
                <div class="cdItem">
                  <img class="cdcover" src="images/used_photos/velocity2_cd_cover.png">
                  <h2><i>A Necklace of Dew</i> for clarinet and alto saxophone with effects pedals</h2>
                  <ul>
                    <li>John Masserini, clarinet</li>
                    <li>Jonathan Bergeron, saxophone</li>
                    <li><span class="text3">Centaur Records</span></li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-item02" role="tabpanel" aria-labelledby="v-pills-item02-tab">
                <div class="cdItem">
                  <img class="cdcover" src="images/used_photos/cd_cover-music_from_prague.jpg">
                  <h2><i>Swans</i> for chamber orchestra</h2>
                  <ul>
                    <li>Hradec Kralove Philharmonic Orchestra</li>
                    <li>Andreas Sebastian Weiser, conductor</li>
                    <li><span class="text3">CRS Master Recordings</span></li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-item03" role="tabpanel" aria-labelledby="v-pills-item03-tab">
                <div class="cdItem">
                  <img class="cdcover" src="images/used_photos/cd_cover_albuzerxque.jpg">
                  <h2><i>Sleep's Shifting Darkness</i> for computer generated sounds</h2>
                  <ul>
                    <li><span class="text3">albuzerxque vol. 20</span></li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-item04" role="tabpanel" aria-labelledby="v-pills-item04-tab">
                <div class="cdItem">
                  <a target="_blank" href="http://www.amazon.com/Gregg-Smith-Singers-Like-Shining/dp/B000056K7X">
                    <img class="cdcover" src="images/used_photos/cd_cover_greggsmithsingers.jpg">
                  </a>
                  <h2><i>Dusk</i> for SATB choir</h2>
                  <ul>
                    <li>The Gregg Smith Singers</li>
                    <li><span class="text3">Living Artist Recordings</span></li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-item05" role="tabpanel" aria-labelledby="v-pills-item05-tab">
                <div class="cdItem">
                  <img class="cdcover" src="images/used_photos/cd_cover_oguztansel.jpg">
                  <h2><i>Blue Gorge</i> for soprano and piano</h2>
                  <ul>
                    <li><i>Blue Gorge</i></li>
                    <li><i>World of Tales</i></li>
                    <li><i>Invitation</i></li>
                  </ul>

                  <h2><i>Weeping Willow</i> for soprano and string quartet</h2>
                  <ul>
                    <li><i>The Men</i></li>
                    <li><i>Song of the Prisoner</i></li>
                    <li><i>Weeping Willow</i></li>
                  </ul>

                  <h2><i>Two Turkish Songs</i> for soprano, flute, and piano</h2>
                  <ul>
                    <li><i>April Rain</i></li>
                    <li><i>Popular Tree</i></li>
                    <li style="list-style:none;">
                      <ul style="list-style:none; position:relative; left:-25px;">
                        <li>Performed by members of the Ankara State Opera</li>
                        <li><span class="text3">Sponsored by The Republic of Turkey, Ministry of Culture.</span></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-item06" role="tabpanel" aria-labelledby="v-pills-item06-tab">
                ...item06 (see 'item05')
              </div>

              <div class="tab-pane fade" id="v-pills-item07" role="tabpanel" aria-labelledby="v-pills-item07-tab">
                ...item07 (see 'item05')
              </div>

              <div class="tab-pane fade" id="v-pills-item08" role="tabpanel" aria-labelledby="v-pills-item08-tab">
                <div class="cdItem">
                  <a target="_blank" href="http://cdbaby.com/cd/caulkins">
                    <img class="cdcover" src="images/used_photos/cd_cover_neiltamaracaulkins.jpg">
                  </a>
                  <h2><i>Water Leaves</i> for guitar duo</h2>
                  <ul>
                    <li>The Caulkins Duo</li>
                    <li><span class="text3">Celebration Recordings</span></li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-item09" role="tabpanel" aria-labelledby="v-pills-item09-tab">
                <div class="cdItem">
                  <img class="cdcover" src="#" height="200px" width="200px">
                  <h2><i>Swans</i> for orchestra</h2>
                  <ul>
                    <li>Bowling Green Philharmonia, Emily Freeman Brown, conductor</li>
                    <li><span class="text3">The Eleventh Annual New Music and Art Festival at Bowling Green State University Radio Series</span></li>
                  </ul>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-item10" role="tabpanel" aria-labelledby="v-pills-item10-tab">
                <div class="cdItem">
                  <img class="cdcover" src="images/used_photos/cd_cover_beneath_the_tide.png" width="200px" height="200px">
                  <h2>Beneath the Tide</h2>
                  <ul>
                    <li>Lullaby for violin and orchestra</li>
                    <li>Goran Končar, violin</li>
                    <li>Miran Vaupotić, conductor</li>
                    <li>Croatian Chamber Orchestra</li>
                    <li><span class="text3">Navona Records</span></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div style="display:none;">
          <div class="cdItem">
            <img class="cdcover" src="images/used_photos/velocity2_cd_cover.png">
            <h2><i>A Necklace of Dew</i> for clarinet and alto saxophone with effects pedals</h2>
            <ul>
              <li>John Masserini, clarinet</li>
              <li>Jonathan Bergeron, saxophone</li>
            </ul>
          </div>

          <div class="cdItem">
            <img class="cdcover" src="images/used_photos/cd_cover-music_from_prague.jpg">
            <h2><i>Swans</i> for chamber orchestra</h2>
            <ul>
              <li>Hradec Kralove Philharmonic Orchestra</li>
              <li>Andreas Sebastian Weiser, conductor</li>
              <li>CRS Master Recordings</li>
            </ul>
          </div>

          <div class="cdItem">
            <img class="cdcover" src="images/used_photos/cd_cover_albuzerxque.jpg">
            <h2><i>Sleep's Shifting Darkness</i> for computer generated sounds</h2>
            <ul>
              <li><span class="text3">albuzerxque vol. 20</span></li>
            </ul>
          </div>

          <div class="cdItem">
            <a target="_blank" href="http://www.amazon.com/Gregg-Smith-Singers-Like-Shining/dp/B000056K7X">
              <img class="cdcover" src="images/used_photos/cd_cover_greggsmithsingers.jpg">
            </a>
            <h2><i>Dusk</i> for SATB choir</h2>
            <ul>
              <li>The Gregg Smith Singers</li>
              <li><span class="text3">Living Artist Recordings</span></li>
            </ul>
          </div>

          <div class="cdItem" id="thisONE">
            <img class="cdcover" src="images/used_photos/cd_cover_oguztansel.jpg">
            <h2><i>Blue Gorge</i> for soprano and piano</h2>
            <ul>
              <li><i>Blue Gorge</i></li>
              <li><i>World of Tales</i></li>
              <li><i>Invitation</i></li>
            </ul>

            <h2><i>Weeping Willow</i> for soprano and string quartet</h2>
            <ul>
              <li><i>The Men</i></li>
              <li><i>Song of the Prisoner</i></li>
              <li><i>Weeping Willow</i></li>
            </ul>

            <h2><i>Two Turkish Songs</i> for soprano, flute, and piano</h2>
            <ul>
              <li><i>April Rain</i></li>
              <li><i>Popular Tree</i></li>
              <li style="list-style:none;">
                <ul style="list-style:none; position:relative; left:-25px;">
                  <li>Performed by members of the Ankara State Opera</li>
                  <li><span class="text3">Sponsored by The Republic of Turkey, Ministry of Culture.</span></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="cdItem">
            <a target="_blank" href="http://cdbaby.com/cd/caulkins">
              <img class="cdcover" src="images/used_photos/cd_cover_neiltamaracaulkins.jpg">
            </a>
            <h2><i>Water Leaves</i> for guitar duo</h2>
            <ul>
              <li>The Caulkins Duo</li>
              <li><span class="text3">Celebration Recordings</span></li>
            </ul>
          </div>

          <div class="cdItem">
            <h2><i>Swans</i> for orchestra</h2>
            <ul>
              <li>Bowling Green Philharmonia, Emily Freeman Brown, conductor</li>
              <li><span class="text3">The Eleventh Annual New Music and Art Festival at Bowling Green State University Radio Series</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
