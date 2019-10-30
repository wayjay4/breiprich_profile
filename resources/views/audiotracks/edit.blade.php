@extends('layouts.dashboard.app')

@section('header') AudioTrack - Editor @endsection

@section('content')
<div class="main_content" id="create_comp_content">
  @if($create)
    <h1>Create AudioTrack</h1>

    <form id="compEditForm" action="{{route('atracks.store', ['compID'=>$compID])}}" method="post" enctype="multipart/form-data">
  @else
    <h1>Edit AudioTracks</h1>

    <form id="compEditForm" action="{{route('atracks.update', ['compID'=>$track->composition->id, 'trackID'=>$track->id])}}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_method" value="PUT" />
  @endif

    {{ csrf_field() }}

    @include('inc.messages')

    <div class="form-group row">
      <label for="formGroupExampleInput1" class="col-sm-2 col-form-label">name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="name" name="name"  value="{{$track->name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput2" class="col-sm-2 col-form-label">audio file</label>
      <div class="col-sm-10">
        <div>
          <input type="file" name="fileToUpload" id="fileToUpload" />
        </div>

        <div style="padding:15px; margin:15px; border-radius:25px; border: 1px solid yellow;">
          @if($track->file_name != null)
            <div class="play_me">
              <a class="audio_track" href="{{asset('storage/music/comp_tracks/'.$track->file_name)}}">
                <i class="material-icons" href="{{asset('storage/music/comp_tracks/'.$track->file_name)}}" style="position:relative; font-size:50px;">play_circle_outline</i>
                <span style="position:relative; top:-18px;">{{ strtolower(basename($track->file_name)) }}</span>
              </a>
            </div>
          @else
            <span><i>Please select an audio track to upload. (Required) </i></span>
          @endif

          <div id="comp_media_player" align="center" style="position: relative;">
          </div>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput3" class="col-sm-2 col-form-label">image file</label>
      <div class="col-sm-10">
        <div>
          <input type="file" name="imageToUpload" id="imageToUpload" />
        </div>

        <div style="padding:15px; margin:15px; border-radius:25px; border: 1px solid yellow;">
          <img src="{{asset('storage/images/comp_tracks/'.$image_name)}}" alt="{{$image_name}}" width="125" height="125">
        </div>
      </div>
    </div>

    @if($track->id > 0)
      <div class="subContent" style="margin:15px;">
        <h2>Detail Items:</h2>
          @if(count($track->audio_details) > 0)
            <div style="margin:5px; margin-bottom:15px;">
              <ul>
                @foreach($track->audio_details as $audio_detail)
                  <li>
                    <div class="container" style="margin-top:15px; margin-bottom:15px; padding:10px; border:1px solid green; border-radius:25px;">
                      <div class="row">
                        <div class="col-sm-7">
                          {{$audio_detail->text}}
                        </div>
                        <div class="col-sm-3">
                          <a class="btn btn-outline-warning btn-sm" style="float:right;" href="{{route('adetails.edit', ['trackID'=> $track->id, 'detailItemID'=>$audio_detail->id])}}">Edit</a>
                        </div>
                        <div class="col-sm-2">
                          <form action="{{route('adetails.destroy', ['trackID'=> $track->id, 'detailItemID'=>$audio_detail->id])}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <input type="submit" class="btn btn-outline-danger btn-sm detailItemDeleteButton" style="float:left:" value="Delete" data-action="{{route('adetails.destroy', ['trackID'=> $track->id, 'detailItemID'=>$audio_detail->id])}}" />
                          </form>
                        </div>
                      </div>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          @else
            <p>none</p>
          @endif

        <a class="btn btn-outline-info btn-sm" href="{{route('adetails.create', ['trackID'=>$track->id])}}">Add a detail</a>
      </div>
    @endif

    <hr  />

    <a class="btn btn-secondary" href="{{route('comps.show', ['compID'=>$compID])}}">Go Back</a>
    <input type="submit" value="Submit" class="btn btn-primary" id="trackEditSubmitButton" />
  </form>
</div>
@endsection

@section('addtl_scripts')
<script>
  $(document).ready(function($){
    $("#trackEditSubmitButton").on("click", function(event){
      event.preventDefault();

      $("#spinner").show();

      // the view has a form containing inner forms that resets the outer form's input.attr(_method) to DELETE,
      // this procedure changes them all to PUT so that the outer form works properly
      $("input[name=_method]").each(function(key, target){
        $(target)[0].value = "PUT";
      });

      $("#compEditForm").submit();
    });

    $(".detailItemDeleteButton").on("click", function(event){
      event.preventDefault();

      // for some reason the first item in the audio detailList is not catching it's parent form correclty
      // when deleting a detailItem and it is catching the outer form instead,
      // so we are capturing the attribute 'data.action' from the target element (applied to all items in detailList),
      // then update the outer form's action with 'data.action' and submit the form instead
      $("#compEditForm").attr("action", $(event.target).attr("data-action"));
      $("#compEditForm").submit();
    });

    var myDiv2Para = $("#div_audioplayer").detach();
    myDiv2Para.appendTo('#comp_media_player');
  });
</script>
@endsection
