@extends('layouts.composer.app')

@section('content')
<div class="main_content" id="create_comp_content">

  <h1>Compositions</h1>

  <p>
    <a class="btn btn-primary" href="{{route('comps.create', [])}}" role="button">Create Composition</a>
  </p>

  @if(count($comps) > 0)
    @foreach($comps as $comp)
      <div>
        <h3><a href="{{route('comps.show', ['compID'=>$comp->id])}}">{{$comp->title}}</a></h3>
        <small>Created on {{$comp->created_at}}</small>
      </div>
    @endforeach
  @else
    <p>No compositions found</p>
  @endif

  <div class="container">
    <div class="row">
      <div class="col-sm" id="Compositions"></div>
    </div>
  </div>
</div>
@endsection
