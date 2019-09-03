@extends('layouts.composer.app')

@section('content')
  <div class="main_content" id="home_content">
    <div id="home_flashplayer">
      <script type="text/javascript">
        AC_FL_RunContent('codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','850','height','450','hspace','0','vspace','0','src','../flash_files/intro_bruce','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','loop','true','movie','../flash_files/intro_bruce' ); //end AC code
      </script>

      <noscript>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="850" height="450" hspace="0" vspace="0">
          <param name="movie" value="../flash_files/intro_bruce.swf">
          <param name="quality" value="high"><param name="LOOP" value="true">
          <embed src="../flash_files/intro_bruce.swf" width="850" height="450" hspace="0" vspace="0" loop="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
        </object>
      </noscript>
    </div>
  </div>
@endsection
