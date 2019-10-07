<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    // Table Name
    protected $table = 'compositions';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    /**
    * Get the audio data
    */
    public function audio_tracks(){
      return $this->hasMany('App\AudioTrack');
    }

    /**
    * Get the music_genre that owns this composition.
    */
    public function music_genre(){
      return $this->belongsTo('App\MusicGenre');
    }
}
