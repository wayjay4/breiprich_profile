@extends('layouts.composer.app')

@section('content')
<div class="main_content" id="create_comp_content">
  <h1 style="margin-top:15px;; padding-top:0px;;">{{$comp->title}}</h1>

  <div>
    <ul>
      <div id="comp_media_player" align="center" style="position:relative; float:right; border: 1px solid black; border-radius:25px;">
      </div>

      <li><strong>genre:</strong> {{ $comp->music_genre->name }}</li>
      <li><strong>year:</strong> {{$comp->year}}</li>
      <li><strong>instruments:</strong> {{$comp->instruments}}</li>
      <li><strong>total_movements:</strong> {{$comp->total_movements}}</li>
      <li><strong>versions:</strong> {{$comp->versions}}</li>
      <li><strong>total_time:</strong> {{$comp->total_time}}</li>
      <li><strong>audio_files:</strong>
        @if(count($comp->audio_tracks) > 0)
          <ul>
            @foreach($comp->audio_tracks as $audio_track)
              <div style="border-bottom: 1px solid yellow; margin:5px; padding:25px;">
                <img style="position:relative; float:right; border: 1px solid grey;" src="{{asset('storage/images/comp_tracks/'.$audio_track->image_name)}}" alt="{{$audio_track->image_name}}" width="125" height="125">

                <li><strong>title:</strong> {{$audio_track->name}}</li>
                <li><strong>file_name:</strong> <a class="audio_track" href="{{asset('storage/music/comp_tracks/'.$audio_track->file_name)}}">{{$audio_track->file_name}}</a></li>
                <li><strong>image_name:</strong> {{$audio_track->image_name}}</li>
                <li><strong>track_details:</strong>
                  @if(count($audio_track->audio_details) > 0)
                    <ul>
                      @foreach($audio_track->audio_details as $audio_detail)
                        <li>{{$audio_detail->text}}</li>
                      @endforeach
                    </ul>
                  @else
                    none
                  @endif
                </li>
                <div style="margin-top:10px; margin-bottom:25px; margin-left: 25px; padding:10px;">
                  <a style="float:left; margin-right:10px;" class="btn btn-outline-warning btn-sm" href="{{route('atracks.edit', ['compID'=>$comp->id, 'trackID'=> $audio_track->id])}}">Edit Audio Track</a>

                  <form action="{{route('atracks.destroy', ['compID'=>$audio_track->composition->id, 'trackID'=> $audio_track->id])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE" />
                    <input style="float:left; margin-right:10px;" type="submit" class="btn btn-outline-danger btn-sm" value="Delete Audio Track" />
                  </form>
                </div>
              </div>
            @endforeach
          </ul>
        @else
          none
        @endif
      </li>
      <div style="margin-top:10px;">
        <a class="btn btn-outline-info btn-sm" href="{{route('atracks.create', ['compID'=>$comp->id])}}">Add an audio track</a>
      </div>
    </ul>
  </div>


  <hr  />

  <a class="btn btn-secondary" href="{{route('comps.index', [])}}">Go Back</a>
  <a class="btn btn-primary" href="{{route('comps.edit', ['compID'=>$comp->id])}}">Edit Composition</a>

  <form action="" method="post" style="float:right;">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE" />
    <input type="submit" class="btn btn-danger" value="Delete" />
  </form>
</div>
@endsection

@section('addtl_scripts')
<script>
  $(document).ready(function($){
    var myDiv2Para = $("#div_audioplayer").detach();
    myDiv2Para.appendTo('#comp_media_player');
  });
</script>
@endsection
