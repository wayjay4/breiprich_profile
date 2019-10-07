<?php

namespace App\Http\Controllers\Composer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AudioTrack;
use App\AudioDetail;

class AudiodetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($trackID)
    {
        $track = AudioTrack::find($trackID);
        $compID = $track->composition->id;
        $detailItem = new AudioDetail;

        return view('audiodetails.edit')->with([
          'compID' => $compID,
          'trackID' => $trackID,
          'detailItem' => $detailItem,
          'create' => true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $trackID)
    {
      $this->validate($request, [
        'text' => 'required'
      ]);

      $track = AudioTrack::find($trackID);
      $compID = $track->composition->id;

      $detailItem = new AudioDetail;
      $detailItem->text = $request->input('text');
      $detailItem->audio_track_id = $trackID;
      $detailItem->save();

      return redirect(route('atracks.edit', ['compID'=>$compID, 'trackID'=>$trackID]))->with([
        'success' => 'AudioDetail Created'
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($trackID, $detailID)
    {
      $track = AudioTrack::find($trackID);
      $compID = $track->composition->id;
      $detailItem = AudioDetail::find($detailID);

      return view('audiodetails.edit')->with([
        'compID' => $compID,
        'trackID' => $trackID,
        'detailItem' => $detailItem,
        'create' => false
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $trackID, $detailID)
    {
      $this->validate($request, [
        'text' => 'required'
      ]);

      $track = AudioTrack::find($trackID);
      $compID = $track->composition->id;

      $detailItem = AudioDetail::find($detailID);
      $detailItem->text = $request->input('text');
      $detailItem->save();

      return redirect(route('atracks.edit', ['compID'=>$compID, 'trackID'=>$trackID]))->with([
        'success' => 'AudioDetail Updated'
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($trackID, $detailID)
    {
      $track = AudioTrack::find($trackID);
      $compID = $track->composition->id;

      $detailItem = AudioDetail::find($detailID);
      $detailItem->delete();

      return redirect(route('atracks.edit', ['compID'=>$compID, 'trackID'=>$trackID]))->with([
        'success' => 'AudioDetail Deleted'
      ]);
    }
}
