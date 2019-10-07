@extends('layouts.composer.app')

@section('content')
  <script>
    $(document).ready(function($){
      var myDiv2Para = $("#div_audioplayer").detach();
      myDiv2Para.appendTo('#comp_media_player');
    });
  </script>

  <div class="main_content" id="comp_content">
    <div id="comp_textArea">

      <div id="comp_textBox">

        <div class="row">
          <div class="col-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-orchestracc-tab" data-toggle="pill" href="#v-pills-orchestracc" role="tab" aria-controls="v-pills-orchestracc" aria-selected="true">
                Orchestra - Chamber/Concerto
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

        <div id="comp_media_player" align="center">
        </div>

      </div>

      <div id="comp_dataBox">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="v-pills-tabContent">

              @foreach($ensembles as $key=>$compositions)
                @if($loop->first)
                <div class="tab-pane fade show active" id="v-pills-{{$key}}" role="tabpanel" aria-labelledby="v-pills-{{$key}}-tab">
                @else
                <div class="tab-pane fade" id="v-pills-{{$key}}" role="tabpanel" aria-labelledby="v-pills-{{$key}}-tab">
                @endif

                @foreach($compositions as $comp)
                  <div class="comp_itemDetail">
                    <h2>{{ strtoupper($comp['title']) }} ({{ $comp['year'] }})</h2>
                    <ul>
                      @if($comp['instruments'] != null)
                        <li><span class="intruments"><span class="comp_title">Instruments:</span> {{ $comp['instruments'] }}</span></li>
                      @endif

                      @if($comp['total_movements'] != null)
                        <li><span class="total_movements"><span class="comp_title">Movements:</span> {{ $comp['total_movements'] }}</span></li>
                      @endif

                      @if($comp['versions'] != null)
                        <li><span class="versions"><span class="comp_title">Versions:</span> {{ $comp['versions'] }}</span></li>
                      @endif

                      @if($comp['total_time'] != null)
                        <li><span class="total_time"><span class="comp_title">Length:</span> {{ $comp['total_time'] }} minutes</span></li>
                      @endif
                    </ul>

                    <div class="div_jukeBox">
                        @if(isset($comp['audio_files']))
                          @if($comp['audio_files'] != null)
                            <div class="card mb-3 text-white" style="background:rgba(65,105,225,0.5);" >
                              <div class="row no-gutters">

                                <div class="col-md-12">
                                  <div class="play_me">
                                    @foreach($comp['audio_files'] as $audio_file)
                                      <div class="div_trackData">
                                        <a class="audio_track" href="{{ $audio_file }}">
                                          <i class="material-icons" href="{{ $audio_file }}" style="position:relative; font-size:50px;">play_circle_outline</i>
                                          <span style="position:relative; top:-18px;">{{ strtolower(basename($audio_file)) }}</span>
                                        </a>
                                      </div>
                                    @endforeach
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="card-body" style="margin-top:0px; padding-top:0px; margin-left:-10px;">
                                    <p class="card-text">
                                      @if($comp['audio_details'] != null)
                                          <ul style="list-style:square;">
                                            @foreach($comp['audio_details'] as $audio_detail)
                                              <li><span class="audio_details">{{ $audio_detail }}</span></li>
                                            @endforeach
                                          </ul>
                                      @else
                                        &nbsp;
                                      @endif
                                    </p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          @endif
                        @endif
                      </div>
                  </div>
                @endforeach
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
