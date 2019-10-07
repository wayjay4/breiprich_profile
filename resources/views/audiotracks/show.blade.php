@extends('layouts.composer.app')

@section('content')
<div class="main_content" id="create_comp_content">
  <a class="btn btn-outline-secondary" href="{{route('atracks.index', ['compID'=>$compID])}}">Go Back</a>

  <h1 style="margin-top:15px; padding-top:0px;">{{$track->name}}</h1>

  <div>
    <ul>
      <li><strong>track_name:</strong> {{$track->name}}</li>
      <li><strong>file_name:</strong> {{$track->file_name}}</li>
      <li><strong>track_details:</strong>
        @if(count($track->audio_details) > 0)
          <ul>
            @foreach($track->audio_details as $audio_detail)
              <li><strong>detail:</strong> {{$audio_detail->detail}}</li>
            @endforeach
          </ul>
        @else
          none
        @endif
      </li>
    </ul>
  </div>


  <hr  />

  <a class="btn btn-primary" href="{{route('atracks.edit', ['compID'=>$compID, 'trackID'=>$track->id])}}">Edit</a>

  <form action="" method="post" style="float:right;">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE" />
    <input type="submit" class="btn btn-danger" value="Delete" />
  </form>
</div>
@endsection
