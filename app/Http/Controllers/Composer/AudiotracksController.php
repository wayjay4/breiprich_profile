<?php

namespace App\Http\Controllers\Composer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AudioTrack;
use App\AudioDetail;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AudiotracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($compID)
    {
      $tracks = AudioTrack::orderBy('id', 'asc')->get();

      return view('audiotracks.index')->with([
        'compID' => $compID,
        'tracks' => $tracks
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($compID)
    {
      $track = new AudioTrack;

      return view('audiotracks.edit')->with([
        'compID' => $compID,
        'track' => $track,
        'image_name' => 'blank_image.png',
        'create' => true
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $compID)
    {
      $this->validate($request, [
        'name' => 'required',
        'fileToUpload' => 'mimetypes:audio/mpeg|required',
        'imageToUpload' => 'image|nullable'
      ]);

      // handle file upload
      if($request->hasFile('fileToUpload')){
        // get just filename
        $filename = pathinfo($request->fileToUpload->getClientOriginalName(), PATHINFO_FILENAME);
        // get just extension
        $extension = $request->fileToUpload->getClientOriginalExtension();
        // set $fileNameToStore
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // upload the file
        Storage::putFileAs('public/music/comp_tracks', $request->fileToUpload, $fileNameToStore);
      }

      // handle file upload
      if($request->hasFile('imageToUpload')){
        // get just filename
        $filename = pathinfo($request->imageToUpload->getClientOriginalName(), PATHINFO_FILENAME);
        // get just extension
        $extension = $request->imageToUpload->getClientOriginalExtension();
        // set $imageNameToStore
        $imageNameToStore = $filename.'_'.time().'.'.$extension;
        // upload the image
        Storage::putFileAs('public/images/comp_tracks', $request->imageToUpload, $imageNameToStore);
      }
      else{
        $imageNameToStore = 'blank_image.png';
      }

      $track = new AudioTrack;
      $track->name = $request->input('name');
      $track->file_name = $fileNameToStore;
      $track->image_name = $imageNameToStore;
      $track->composition_id = $compID;
      $track->save();

      return redirect(route('atracks.edit', ['compID'=>$compID, 'trackID'=>$track->id]))->with([
        'success' => 'AudioTrack Created'
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($compID, $trackID)
    {
      $track = AudioTrack::find($trackID);

      return view('audiotracks.show')->with([
        'compID' => $compID,
        'track' => $track
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($compID, $trackID)
    {
      $track = AudioTrack::find($trackID);

      return view('audiotracks.edit')->with([
        'compID' => $compID,
        'track' => $track,
        'image_name' => $track->image_name,
        'create' => false,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $compID, $trackID)
    {
      $this->validate($request, [
        'name' => 'required',
        'fileToUpload' => 'mimetypes:audio/mpeg|nullable',
        'imageToUpload' => 'image|nullable'
      ]);

      $track = AudioTrack::find($trackID);

      // handle file upload
      if($request->hasFile('fileToUpload')){
        // get just filename
        $filename = pathinfo($request->fileToUpload->getClientOriginalName(), PATHINFO_FILENAME);
        // get just extension
        $extension = $request->fileToUpload->getClientOriginalExtension();
        // set $fileNameToStore
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // upload the file
        Storage::putFileAs('public/music/comp_tracks', $request->fileToUpload, $fileNameToStore);
        // delete old file
        Storage::delete('public/music/comp_tracks/'.$track->file_name);
      }
      else{
        $fileNameToStore = $track->file_name;
      }

      // handle image upload
      if($request->hasFile('imageToUpload')){
        // get just filename
        $filename = pathinfo($request->imageToUpload->getClientOriginalName(), PATHINFO_FILENAME);
        // get just extension
        $extension = $request->imageToUpload->getClientOriginalExtension();
        // set $imageNameToStore
        $imageNameToStore = $filename.'_'.time().'.'.$extension;
        // upload the image
        Storage::putFileAs('public/images/comp_tracks', $request->imageToUpload, $imageNameToStore);
        // delete old image
        Storage::delete('public/images/comp_tracks/'.$track->image_name);
      }
      else{
        $imageNameToStore = $track->image_name;
      }

      $track->name = $request->input('name');
      $track->file_name = $fileNameToStore;
      $track->image_name = $imageNameToStore;
      $track->save();

      //return response()->download(storage_path('app/public/images/audio_tracks/' . $fileNameToStore));

      return redirect(route('comps.show', ['compID'=>$compID]))->with([
        'success' => 'AudioTrack Updated'
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($compID, $trackID)
    {
      AudioDetail::where('audio_track_id', $trackID)->delete();

      $track = AudioTrack::find($trackID);
      Storage::delete('public/music/comp_tracks/'.$track->file_name);
      if($track->image_name != 'blank_image.png')
        Storage::delete('public/images/comp_tracks/'.$track->image_name);
      $track->delete();

      return redirect(route('comps.show', ['compID'=>$compID]))->with([
        'success' => 'AudioTrack Deleted'
      ]);
    }
}
