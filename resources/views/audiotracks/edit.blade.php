@extends('layouts.composer.app')

@section('content')
<script>
  $(document).ready(function($){
    $("#trackEditSubmitButton").on("click", function(event){
      event.preventDefault();

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




    if(false){
      var myDiv2Para = $("#div_audioplayer").detach();
      myDiv2Para.appendTo('#comp_media_player');

      var media = $("#audio_player")[0];
      // pull src file name from media player and replace '_' with spaces and set to track_name
      $("#div_audioplayer").attr("hidden", false);
      media.hidden = false;


      // pull src file name from media player and replace '_' with spaces and set to track_name
      var track_name = media.currentSrc.split('\\').pop().split('/').pop().replace(/\_/g," ");

      // show media player
      $("#div_audioplayer").attr("hidden", false);
      media.hidden = false;

      // place track_name in html for display and capitalize first letters
      $("#track_name").html(track_name);
    }
  });
</script>

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
        @if($track->file_url != null)
          <div style="margin:25px; padding:15px;">
            <div id="comp_media_player" align="center" style="margin:25px; padding:25px;">
            </div>
          </div>
        @endif
        <div style="margin:15px; padding:5px;">
          <input class="btn btn-outline-primary" type="file" name="fileToUpload" id="fileToUpload" />
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="formGroupExampleInput3" class="col-sm-2 col-form-label">image file</label>
      <div class="col-sm-10">
        @if($track->image_url != null && $track->image_url != "noimage.jpg")
          <img src="{{asset('storage/images/comp_tracks/' . $track->image_url)}}" alt="{{$track->image_url}}" width="100" height="150">
        @endif
        <div style="margin:15px; padding:5px;">
          <input class="btn btn-outline-primary" type="file" name="imageToUpload" id="imageToUpload" />
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
