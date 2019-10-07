<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicGenre extends Model
{
    /**
    * Get the compostions for this music_genre
    */
    public function compositions(){
      return $this->hasMany('App\Composition');
    }
}
