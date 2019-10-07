<?php

use Illuminate\Database\Seeder;

class MusicGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre_types = array(
          "Orchestra - Chamber/Concerto",
          "Wind Ensemble",
          "Choral",
          "Vocal",
          "Solo/Duo",
          "Mixed Chamber Ensemble",
          "Electronic"
        );

        foreach($genre_types as $key=>$name){
          DB::table('music_genres')->insert([
            'name' => $name,
            'placement_order' => $key+1
          ]);
        }
    }
}
