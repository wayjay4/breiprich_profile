@extends('layouts.dashboard.app')

@if($create)
  @section('header') Composition - Creator @endsection
@else
  @section('header') Composition - Editor @endsection
@endif

@section('content')
<div class="main_content" id="create_comp_content">
  @if($create)
    <form action="{{route('comps.store', [])}}" method="post">
  @else
    <form action="{{route('comps.update', ['compID'=>$comp->id])}}" method="post">
      <input type="hidden" name="_method" value="PUT" />
  @endif

    {{ csrf_field() }}

    @include('inc.messages')

    <div class="form-group row">
      <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">music genre</label>
      <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1" name="music_genre">
          <option value=".">(Please select)</option>
          @foreach($genre_types as $genre_type)
            @if($comp->music_genre_id == $genre_type->id)
              <?php $selected = 'selected'; ?>
            @else
              <?php $selected = ''; ?>
            @endif
            <option value="{{$genre_type->id}}" {{$selected}}>{{$genre_type->name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput1" class="col-sm-2 col-form-label">title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="title" name="title"  value="{{$comp->title}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput2" class="col-sm-2 col-form-label">year</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="year" name="year"  value="{{$comp->year}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput3" class="col-sm-2 col-form-label">instruments</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="instruments" name="instruments"  value="{{$comp->instruments}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput4" class="col-sm-2 col-form-label">total_movements</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="total_movements" name="total_movements"  value="{{$comp->total_movements}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput5" class="col-sm-2 col-form-label">versions</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="versions" name="versions"  value="{{$comp->versions}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput6" class="col-sm-2 col-form-label">total_time</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput6" placeholder="total_time" name="total_time"  value="{{$comp->total_time}}">
      </div>
    </div>

    <a class="btn btn-secondary" href="{{route('comps.index', [])}}">Go Back</a>
    <input type="submit" value="Submit" class="btn btn-primary" />
  </form>
</div>
@endsection
