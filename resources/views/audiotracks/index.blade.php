@extends('layouts.composer.app')

@section('content')
<div class="main_content" id="create_comp_content">

  <h1>AudioTracks</h1>

  <p>
    <a class="btn btn-primary" href="{{route('atracks.create', ['compID'=>$compID])}}" role="button" disabled>Create AudioTrack</a>
  </p>

  @if(count($tracks) > 0)
    @foreach($tracks as $track)
      <div>
        <h3><a href="{{route('atracks.show', ['compID'=>$compID, 'trackID'=>$track->id])}}">{{$track->name}}</a></h3>
        <small>Created on {{$track->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No compositions found</p>
  @endif
</div>
@endsection
