<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioDetail extends Model
{
  /**
  * Get the audio_track that owns the audio_detail
  */
  public function audio_track(){
    return $this->belongsTo('App\AudioTrack');
  }
}
