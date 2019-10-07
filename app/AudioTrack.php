<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioTrack extends Model
{
    /**
    * Get the composition that owns the audio_track
    */
    public function composition(){
      return $this->belongsTo('App\Composition');
    }

    /**
    * Get the audio details
    */
    public function audio_details(){
      return $this->hasMany('App\AudioDetail');
    }
}
