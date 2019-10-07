@extends('layouts.composer.app')

@section('content')
  <div class="main_content" id="audio_content">
    <div id="audio_textArea">
      <div id="audio_textBox">

        <table class="table table-hover table-sm">
          <thead>
            <tr>
              <th width="75%" align="left">Track Name</th>
              <th width="12%" align="left">Play Me</th>
              <th width="13%" align="left">Get Info</th>
            </tr>
          </thead>
          <tbody>
            <tr class="dark">
              <td align="left">As Memory Passes (2011) - for Alto Saxophone, Percussion(2) and Piano with Live Electronics</td>
              <td align="center"><a class="audio" href="music/as_memory_passes_electronic.mp3" onclick="return popitup('music/as_memory_passes_electronic.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=as_memory_passes_electronic" target="_blank">info</a></td>
            </tr>

            <tr class="light">
              <td align="left">As Memory Passes (2011) - for Alto Saxophone, Percussion(1) and Piano</td>
              <td align="center"><a class="audio" href="music/as_memory_passes_acoustic.mp3" onclick="return popitup('music/as_memory_passes_acoustic.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=as_memory_passes_acoustic" target="_blank">info</a></td>
            </tr>

            <tr class="dark">
              <td align="left">Through The Scented Grasses And Broken Mists (2011) - for Soprano Saxophone and CD Playback</td>
              <td align="center"><a class="audio" href="music/scented_grasses.mp3" onclick="return popitup('music/scented_grasses.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=scented_grasses" target="_blank">info</a></td>
            </tr>

            <tr class="light">
              <td align="left">Knots (2010) - for Free Improvisation Soloist and Percussion Quartet</td>
              <td align="center"><a class="audio" href="music/knots.mp3" onclick="return popitup('music/knots.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=knots" target="_blank">info</a></td>
            </tr>

            <tr class="dark">
              <td align="left">The River Empties Into (2006) - for Soprano &amp; Orchestra</td>
              <td align="center"><a class="audio" href="music/08_the_river_empties_into.mp3" onclick="return popitup('music/08_the_river_empties_into.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=the_river_empties_into" target="_blank">info</a></td>
            </tr>

            <tr class="light">
              <td align="left">Old Pond (2003) - for Bass Flute, Clarinet, Violin, Violoncello, &amp; Piano</td>
              <td align="center"><a class="audio" href="music/01_pond.mp3" onclick="return popitup('music/01_pond.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=old_pond" target="_blank">info</a></td>
            </tr>

            <tr class="dark">
              <td align="left">Lullaby (2002) - for Violin &amp; Orchestra</td>
              <td align="center"><a class="audio" href="music/07_lullaby.mp3" onclick="return popitup('music/07_lullaby.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=lullaby" target="_blank">info</a></td>
            </tr>

            <tr class="light">
              <td align="left">Chozubachi (2000) - for Piano Trio</td>
              <td align="center"><a class="audio" href="music/02_chozubachi.mp3" onclick="return popitup('music/02_chozubachi.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=chozubachi" target="_blank">info</a></td>
            </tr>

            <tr class="dark">
              <td align="left">Dusk (1998) - for SATB Choir</td>
              <td align="center"><a class="audio" href="music/06_dusk.mp3" onclick="return popitup('music/06_dusk.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=dusk" target="_blank">info</a></td>
            </tr>

            <tr class="light">
              <td align="left">Shishi-Odoshi (1995) - for Flute, Harp &amp; Percussion</td>
              <td align="center"><a class="audio" href="music/04_shishi_odoshi.mp3" onclick="return popitup('music/04_shishi_odoshi.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=shishi_odoshi" target="_blank">info</a></td>
            </tr>

            <tr class="dark">
              <td align="left">Weeping Willow (1996) - for Soprano &amp; String Quartet</td>
              <td align="center"><a class="audio" href="music/05_weeping_willow.mp3" onclick="return popitup('music/05_weeping_willow.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=weeping_willow" target="_blank">info</a></td>
            </tr>

            <tr class="light">
              <td align="left">Moon in Blue Shadows - for Flute &amp; Piano</td>
              <td align="center"><a class="audio" href="music/03_moon_in_blue_shadows.mp3" onclick="return popitup('music/03_moon_in_blue_shadows.mp3')">listen</a></td>
              <td align="center"><a class="audio" href="music/info.php?songtitle=moon_in_blue_shadows" target="_blank">info</a></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
