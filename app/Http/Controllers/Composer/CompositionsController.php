<?php

namespace App\Http\Controllers\Composer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Composition;
use App\MusicGenre;
use DB;

class CompositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$comps = DB::select('SELECT * FROM compositions ORDER BY id asc;');
      //$comps = Composition::all();
      //$comps = Composition::where('title', 'Plumous')->get();
      //$comps = Composition::orderBy('id', 'asc')->take(1)->get();
      //$comps = Composition::orderBy('id', 'asc')->get();

      $comps = Composition::orderBy('id', 'asc')->get();
      return view('compositions.index')->with('comps', $comps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $comp = new Composition;
      $genre_types = MusicGenre::orderBy('placement_order', 'asc')->get();

      return view('compositions.edit')->with([
        'comp'=> $comp,
        'genre_types' => $genre_types,
        'create'=>true
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required',
          'year' => 'required',
          'instruments' => 'required',
          'total_movements' => 'required',
          'versions' => 'required',
          'total_time' => 'required'
        ]);

        // create composition
        $comp = new Composition;
        $comp->title = $request->input('title');
        $comp->year = $request->input('year');
        $comp->instruments = $request->input('instruments');
        $comp->total_movements = $request->input('total_movements');
        $comp->versions = $request->input('versions');
        $comp->total_time = $request->input('total_time');
        $comp->music_genre_id = $request->input('music_genre');
        $comp->save();

        return redirect(route('comps.show', ['compID'=>$comp->id]))
        ->with('success', 'Composition Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $comp = Composition::find($id);
      $genre_types = MusicGenre::orderBy('placement_order', 'asc')->get();

      return view('compositions.show')->with([
        'comp' => $comp,
        'genre_types' => $genre_types
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $comp = Composition::find($id);
      $genre_types = MusicGenre::orderBy('placement_order', 'asc')->get();

      return view('compositions.edit')->with([
        'comp' => $comp,
        'genre_types' => $genre_types,
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
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' => 'required',
        'year' => 'required',
        'instruments' => 'required',
        'total_movements' => 'required',
        'versions' => 'required',
        'total_time' => 'required'
      ]);

      // create composition
      $comp = Composition::find($id);
      $comp->title = $request->input('title');
      $comp->year = $request->input('year');
      $comp->instruments = $request->input('instruments');
      $comp->total_movements = $request->input('total_movements');
      $comp->versions = $request->input('versions');
      $comp->total_time = $request->input('total_time');
      $comp->music_genre_id = $request->input('music_genre');
      $comp->save();

      return redirect(route('comps.show', ['compID'=>$id]))
      ->with('success', 'Composition Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $comp = Composition::find($id);
      $comp->delete();

      return redirect(route('comps.index', []))->with('success', 'Composition Deleted');
    }
}
