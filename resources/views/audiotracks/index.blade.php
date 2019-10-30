@extends('layouts.dashboard.app')

@section('header') AudioTracks @endsection

@section('content')
<div class="main_content" id="create_comp_content">

  <h1>Items</h1>

  @if(count($tracks) > 0)
    @foreach($tracks as $track)
      <div>
        <h3><a href="{{route('atracks.show', ['compID'=>$track->composition->id, 'trackID'=>$track->id])}}">{{$track->name}}</a></h3>
        <small>Created on {{$track->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No compositions found</p>
  @endif
</div>
@endsection
