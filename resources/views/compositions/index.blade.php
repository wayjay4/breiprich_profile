@extends('layouts.dashboard.app')

@section('header') Compositions @endsection

@section('header_buttons')
<div>
  <a class="btn btn-primary" href="{{route('comps.create', [])}}" role="button">Create Composition</a>
</div>
@endsection

@section('content')
<div class="main_content" id="create_comp_content">
  <div class="container">
    <div class="row">
      <div class="col-sm" id="Compositions"></div>
    </div>
  </div>
</div>
@endsection
