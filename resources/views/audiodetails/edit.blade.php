@extends('layouts.composer.app')

@section('content')
<div class="main_content" id="create_comp_content">
  @if($create)
    <h1>Create AudioDetail</h1>

    <form action="{{route('adetails.store', ['trackID'=>$trackID])}}" method="post">
  @else
    <h1>Edit AudioDetail</h1>

    <form action="{{route('adetails.update', ['trackID'=>$detailItem->audio_track->id, 'detailItemID'=>$detailItem->id])}}" method="post">
      <input type="hidden" name="_method" value="PUT" />
  @endif

    {{ csrf_field() }}

    @include('inc.messages')

    <div class="form-group row">
      <label for="formGroupExampleInput1" class="col-sm-2 col-form-label">text</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="text" name="text"  value="{{$detailItem->text}}">
      </div>
    </div>

    <hr />

    <a class="btn btn-secondary" href="{{route('atracks.edit', ['compID'=>$compID, 'trackID'=>$trackID])}}">Go Back</a>
    <input type="submit" value="Submit" class="btn btn-primary" />
  </form>
</div>
@endsection
