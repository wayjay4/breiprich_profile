<?php

namespace App\Http\Controllers\Composer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
    * Show composer's homepage
    *
    * @param none
    * @return View
    */
    public function home()
    {
      return view('composer/music_home', ['foo' => 'bar']);
    }

    /**
    * Show composer's biography
    *
    * @param none
    * @return View
    */
    public function bio()
    {
      return view('composer/biography', ['foo' => 'bar']);
    }

    /**
    * Show composer's recordings
    *
    * @param none
    * @return View
    */
    public function recordings()
    {
      return view('composer/recordings', ['foo' => 'bar']);
    }

    /**
    * Show composer's audio links
    *
    * @param none
    * @return View
    */
    public function audio()
    {
      return view('composer/audio', ['foo' => 'bar']);
    }

    /**
    * Show composer's reviews
    *
    * @param none
    * @return View
    */
    public function reviews()
    {
      return view('composer/reviews', ['foo' => 'bar']);
    }

    /**
    * Show composer's contact information
    *
    * @param none
    * @return View
    */
    public function contact()
    {
      return view('composer/contact', ['foo' => 'bar']);
    }

    /**
     * Show composer's compositions
     *
     * @param none
     * @return View
     */
     public function compositions()
     {
       return view('composer/compositions',
       [
         "ensembles"=>[
            "orchestracc" => [
              /*
              [
                "title" => "Plumous",
                "year" => "2018",
                "instruments" => "chamber orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "12",
                "audio_files" => [
                   [
                     "audio_track" => "music/orchestracc/plumous_chamber_orchestra.mp3",
                      "audio_details" => [
                        0 => "Indiana University New Music Ensemble",
                        1 => "Jonathan Spandorf, conductor",
                        ...
                      ]
                   ],
                   ....
                ]
              ],
              */
              [
                "title" => "Cradled In My Arms, Gently",
                "year" => "2018",
                "instruments" => "string orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "4.5",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Plumous",
                "year" => "2018",
                "instruments" => "chamber orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "12",
                "audio_files" => [
                  0 => "music/orchestracc/plumous_chamber_orchestra.mp3"
                ],
                "audio_details" => [
                  0 => "Indiana University New Music Ensemble",
                  1 => "Jonathan Spandorf, conductor"
                ]
              ],
              [
                "title" => "Flowing Waters Caress Fallen Petal",
                "year" => "2014-2015",
                "instruments" => "piano and orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "23",
                "audio_files" => [
                  0 => "music/orchestracc/flowing_waters_concerto.mp3"
                ],
                "audio_details" => [
                  0 => "Flagstaff Symphony Orchestra",
                  1 => "Vicki Ray, piano",
                  2 => "Elizabeth Schulze, conductor"
                ]
              ],
              [
                "title" => "Swans",
                "year" => "1989; rev. 2009",
                "instruments" => "chamber orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                  "title" => "Solitary Traveller",
                "year" => "2008",
                "instruments" => "soprano and orchestra",
                "total_movements" => "five",
                "versions" => null,
                "total_time" => "40",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "The River Empties Into ...",
                "year" => "2006",
                "instruments" => "soprano and orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "14",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "In the Eyes of A Child",
                "year" => "2003",
                "instruments" => "orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Lullaby ",
                "year" => "2002/2018",
                "instruments" => "violin and orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "6",
                "audio_files" => [
                  0 => "music/orchestracc/lullaby.mp3"
                ],
                "audio_details" => [
                  0 => "Croatian Chamber Orchestra",
                  1 => "Goran Koncar, violin",
                  2 => "Miran Vaupotic, conductor"
                ]
              ],
              [
                "title" => "The Day of Quiet",
                "year" => "2000",
                "instruments" => "string orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Duncan's Charge",
                "year" => "2000",
                "instruments" => "orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "4",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Weeping Willow",
                "year" => "1996",
                "instruments" => "soprano and string orchestra",
                "total_movements" => null,
                "versions" => "English and Turkish",
                "total_time" => "8",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Crescent Moon, Misty Bamboos",
                "year" => "1990",
                "instruments" => "baritone, chorus and orchestra",
                "total_movements" => "four",
                "versions" => null,
                "total_time" => "25",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Spring Road",
                "year" => "1982",
                "instruments" => "soprano and chamber orchestra",
                "total_movements" => "two",
                "versions" => null,
                "total_time" => "16",
                "audio_files" => null,
                "audio_details" => null
              ]
            ],
            "windensemble" => [
              [
                "title" => "Emerald Blue",
                "year" => "1985",
                "instruments" => "chorus and wind ensemble",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Oak",
                "year" => "1983",
                "instruments" => "wind ensemble",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => null,
                "audio_details" => null
              ]
            ],
            "choral" => [
              [
                "title" => "Night Sleeps",
                "year" => "2001-2002",
                "instruments" => "SATB chorus",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => [
                  0 => "music/choral/night_sleeps.mp3"
                ],
                "audio_details" => [
                  0 => "Shrine of the Ages Choir",
                  1 => "Edith Copley, conductor"
                ]
              ],
              [
                "title" => "The Breathing of Night",
                "year" => "1999",
                "instruments" => "chamber choir and Tibetan singing bowls",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "15-30",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Dusk",
                "year" => "1998",
                "instruments" => "SATB chorus",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "17",
                "audio_files" => [
                  0 => "music/choral/dusk.mp3"
                ],
                "audio_details" => [
                  0 => "Gregg Smith Singers",
                  1 => "Gregg Smith, conductor"
                ]
              ],
              [
                "title" => "Crescent Moon, Misty Bamboos",
                "year" => "1990",
                "instruments" => "baritone, chorus and orchestra",
                "total_movements" => "four",
                "versions" => null,
                "total_time" => "25",
                "audio_files" => null,
                "audio_details" => null
              ]
            ],
            "vocal" => [
              [
                "title" => "Solitary Traveller",
                "year" => "2008",
                "instruments" => "soprano and orchestra",
                "total_movements" => "five",
                "versions" => null,
                "total_time" => "40",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Clear Rain",
                "year" => "2007",
                "instruments" => "tenor, flute, oboe and piano",
                "total_movements" => null,
                "versions" => "Chinese text",
                "total_time" => "6",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "The River Empties Into ...",
                "year" => "2006",
                "instruments" => "soprano and orchestra",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "14",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Weeping Willow",
                "year" => "1996",
                "instruments" => "soprano and string quartet (or string orchestra or piano)",
                "total_movements" => null,
                "versions" => "English and Turkish",
                "total_time" => "13",
                "audio_files" => [
                  0 => "music/vocal/weeping_willow.mp3"
                ],
                "audio_details" => [
                  0 => "Deborah Raymond, soprano",
                  1 => "Composers, Inc. String Quartet"
                ]
              ],
              /*
              [
                "title" => "Two Turkish Songs",
                "year" => "1995-1996",
                "instruments" => "soprano or tenor, flute and piano",
                "total_movements" => "two",
                "versions" => "English and Turkish",
                "total_time" => "12",
                "audio_files" => [
                  [
                    "audio_track" => "music/vocal/kavak_agaci.mp3",
                    "audio_details" => [
                      0 => "Judith Cloud, mezzo-soprano",
                      1 => "Rita Borden, piano"
                    ]
                  ],
                  [
                    "audio_track" => "music/vocal/april_rain.mp3",
                    "audio_details" => [
                      0 => "Judith Cloud, mezzo-soprano",
                      1 => "Rita Borden, piano"
                    ]
                  ]
                ]
              ],
              */
              [
                "title" => "Two Turkish Songs",
                "year" => "1995-1996",
                "instruments" => "soprano or tenor, flute and piano",
                "total_movements" => "two",
                "versions" => "English and Turkish",
                "total_time" => "12",
                "audio_files" => [
                  0 => "music/vocal/kavak_agaci.mp3",
                  1 => "music/vocal/april_rain.mp3"
                ],
                "audio_details" => [
                  0 => "Judith Cloud, mezzo-soprano",
                  1 => "Rita Borden, piano"
                ]
              ],
              [
                "title" => "Crescent Moon, Misty Bamboos",
                "year" => "1990",
                "instruments" => "baritone, chorus and orchestra",
                "total_movements" => "four",
                "versions" => null,
                "total_time" => "25",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Blue Gorge",
                "year" => "1985-1986",
                "instruments" => "soprano and piano",
                "total_movements" => "three",
                "versions" => null,
                "total_time" => "12",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Spring Road",
                "year" => "1982",
                "instruments" => "soprano and chamber orchestra",
                "total_movements" => "two",
                "versions" => null,
                "total_time" => "16",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Parting",
                "year" => "1979",
                "instruments" => "soprano, two alto flutes, violin, viola, cello",
                "total_movements" => "five",
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ]
            ],
            "soloduo" => [
              [
                "title" => "When Flowers Sleep",
                "year" => "2019",
                "instruments" => "guitar duo",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Deliquescent",
                "year" => "2018",
                "instruments" => "violoncello and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "The Heart of Things",
                "year" => "2017",
                "instruments" => "violin and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Luculent",
                "year" => "2016",
                "instruments" => "two pianos",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "7",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Luculent",
                "year" => "2016",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "7",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Evanescence",
                "year" => "2015",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => [
                  0 => "music/solo_duo/evanescence.mp3"
                ],
                "audio_details" => [
                  0 => "Jorma Marggraf, piano"
                ]
              ],
              [
                "title" => "Blue Heron, Waiting",
                "year" => "2014",
                "instruments" => "guitar",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Wildflowers",
                "year" => "2012-2013",
                "instruments" => "viola with pre-recorded electronics and optional live processing",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "13",
                "audio_files" => [
                  0 => "music/solo_duo/wildflowers.mp3"
                ],
                "audio_details" => [
                  0 => "Kimberly Sullivan, viola"
                ]
              ],
              [
                "title" => "The Moon, Geese Flying Home",
                "year" => "2012",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "16",
                "audio_files" => [
                  0 => "music/solo_duo/the_moon_geese_flying_home.mp3"
                ],
                "audio_details" => [
                  0 => "Vicki Ray, piano"
                ]
              ],
              [
                "title" => "A Necklace of Dew",
                "year" => "2011",
                "instruments" => "clarinet and alto saxophone with effects pedals",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => [
                  0 => "music/solo_duo/a_necklace_of_dew.mp3"
                ],
                "audio_details" => [
                  0 => "Velocity2"
                ]
              ],
              [
                "title" => "When The Pines Sleep It Is Autumn",
                "year" => "2011",
                "instruments" => "alto saxophone duo",
                "total_movements" => "two",
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "When The Pines Sleep It Is Autumn",
                "year" => "2011",
                "instruments" => "bassoon duo",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Through The Scented Grasses And Broken Mists",
                "year" => "2011",
                "instruments" => "soprano saxophone and pre-recorded electronics",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9.5",
                "audio_files" => [
                  0 => "music/solo_duo/through_the_scented_grasses_and_broken_mists.mp3"
                ],
                "audio_details" => [
                  0 => "Jonathan Bergeron, soprano saxophone"
                ]
              ],
              [
                "title" => "Flowing Waters Caress Fallen Petal",
                "year" => "2010",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "7.5",
                "audio_files" => [
                  0 => "music/solo_duo/flowing_waters_caress_fallen_petal.mp3"
                ],
                "audio_details" => [
                  0 => "Vicki Ray, piano"
                ]
              ],
              [
                "title" => "Becoming Blossom",
                "year" => "2010",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "6",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "The Clouds Were Chasing The Wind",
                "year" => "2009",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Gray Clouds Parting",
                "year" => "2009",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "The Leaves Are Gone",
                "year" => "2005-2008",
                "instruments" => "bass flute and percussion (1)",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "13",
                "audio_files" => [
                  0 => "music/solo_duo/leaves_are_gone.mp3"
                ],
                "audio_details" => [
                  0 => "Emily Hoppe, bass flute",
                  1 => "Steve Hemphill, percussion"
                ]
              ],
              [
                "title" => "Through The Scented Grasses And Broken Mists",
                "year" => "2008",
                "instruments" => "soprano saxophone and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "A Thousand Grasses Bend With Dew",
                "year" => "2007",
                "instruments" => "percussion duo",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "7",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "The Scent Of Blossom",
                "year" => "2007",
                "instruments" => "viola or violoncello or alto saxophone and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "14",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "The Ice Shoots Flame",
                "year" => "2005",
                "instruments" => "percussion duo and CD playback",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Moon In Blue Shadows",
                "year" => "2005",
                "instruments" => "flute and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => [
                  0 => "music/solo_duo/moon_in_blue_shadows.mp3"
                ],
                "audio_details" => [
                  0 => "Laura Barron, flute",
                  1 => "Rita Borden, piano"
                ]
              ],
              [
                "title" => "In A RainDrop ... The Moon",
                "year" => "1998",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Crane In Blue Mist",
                "year" => "1998",
                "instruments" => "flute and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "4",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Autumn",
                "year" => "1993",
                "instruments" => "clarinet and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "14",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Across The Celestial River",
                "year" => "1992",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "11",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Water Leaves",
                "year" => "1991",
                "instruments" => "guitar duo",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Water Leaves",
                "year" => "1991",
                "instruments" => "piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "5",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Dragonflies",
                "year" => "1989",
                "instruments" => "guitar",
                "total_movements" => "two",
                "versions" => null,
                "total_time" => "8",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Summer, Doves And Yellow Roses",
                "year" => "1989",
                "instruments" => "organ",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Green Pond",
                "year" => "1988",
                "instruments" => "viola and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "11",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Gray Clouds Parting",
                "year" => "1987",
                "instruments" => "harp",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Birches",
                "year" => "1986",
                "instruments" => "piano",
                "total_movements" => "three",
                "versions" => null,
                "total_time" => "14",
                "audio_files" => null,
                "audio_details" => null
              ]
            ],
            "xchamber" => [
              [
                "title" => "Quivering In The Dusk, Grasses",
                "year" => "2019",
                "instruments" => "flute, vibraphone, harp and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => [
                  0 => "music/xchamber/quivering_in_the_dusk_grasses.mp3"
                ],
                "audio_details" => [
                  0 => "Ensemble Flageolet",
                  1 => "Paul Hostetter, conductor"
                ]
              ],
              [
                "title" => "Plumous",
                "year" => "2018",
                "instruments" => "flute, clarinet, violin, viola, violoncello, vibraphone and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "11",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Translucent",
                "year" => "2015-2016",
                "instruments" => "flute, clarinet, vibraphone, marimba and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "19",
                "audio_files" => [
                  0 => "music/xchamber/translucent.mp3"
                ],
                "audio_details" => [
                  0 => "Oficina Música Viva (Brazil)",
                  1 => "Bruce Reiprich, conductor"
                ]
              ],
              [
                "title" => "Lambent",
                "year" => "2014-2015",
                "instruments" => "alto flute, vibraphone and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "11",
                "audio_files" => [
                  0 => "music/xchamber/lambent.mp3"
                ],
                "audio_details" => [
                  0 => "Barry Crawford, alto flute",
                  1 => "Alex Lipowski, vibraphone",
                  2 => "Stephen Gosling, piano",
                  3 => "David Fulmer, conductor"
                ]
              ],
              [
                "title" => "Within A Veil Of Mist",
                "year" => "2014-2015",
                "instruments" => "violin, violoncello and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "11",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Wildflowers",
                "year" => "2015",
                "instruments" => "viola accompanied by two violins, violoncello and with recorded and live electronics",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "13",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Among Distant Fields",
                "year" => "2012",
                "instruments" => "violin, percussion(1) and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "7.5",
                "audio_files" => [
                  0 => "music/xchamber/among_distant_fields.mp3"
                ],
                "audio_details" => [
                  0 => "Eric KM Clark, violin",
                  1 => "Nick Terry, percussion",
                  2 => "Vicki Ray, piano"
                ]
              ],
              [
                "title" => "As Memory Passes",
                "year" => "2011",
                "instruments" => "any woodwind or string instrument(s), percussion(2) and piano with or without live processing",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "12.5",
                "audio_files" => [
                  0 => "music/xchamber/as_memory_passes.mp3"
                ],
                "audio_details" => [
                  0 => "Erasable color"
                ]
              ],
              [
                "title" => "Above The Distant River, Mist",
                "year" => "2011",
                "instruments" => "violin, percussion(1) and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "16",
                "audio_files" => [
                  0 => "music/xchamber/above_the_distant_river_mist.mp3"
                ],
                "audio_details" => [
                  0 => "Eric KM Clark, violin",
                  1 => "Nick Terry, percussion",
                  2 => "Vicki Ray, piano"
                ]
              ],
              [
                "title" => "Knots",
                "year" => "2010",
                "instruments" => "free improvisation soloist and percussion(3-4)",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9-20",
                "audio_files" => [
                  0 => "music/xchamber/knots.mp3"
                ],
                "audio_details" => [
                  0 => "Frank Rosaly, drum set",
                  1 => "Owen Davis, Jordan Lewis,",
                  2 => "Cassandra Sadelle, Chris Vennel, percussion"
                ]
              ],
              [
                "title" => "Within The Glistening Mist",
                "year" => "2010",
                "instruments" => "saxophone quartet",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "8",
                "audio_files" => [
                  0 => "music/xchamber/within_the_glistening_mist.mp3"
                ],
                "audio_details" => [
                  0 => "Mana Saxophone Quartet"
                ]
              ],
              [
                "title" => "The Willows Are Whispering",
                "year" => "2010",
                "instruments" => "violin, guitar and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "A Thousand Grasses Bend With Dew",
                "year" => "2009",
                "instruments" => "flute, clarinet, horn, trumpet, trombone, vibraphone, percussion(1) and piano",
                "total_movements" => "two, performed attacca",
                "versions" => null,
                "total_time" => "11",
                "audio_files" => [
                  0 => "music/xchamber/a_thousand_grasses_bend_with_dew.mp3"
                ],
                "audio_details" => [
                  0 => "Ensemble Flageolet",
                  1 => "Bruce Reiprich, conductor"
                ]
              ],
              [
                "title" => "I Lingered Among The Hawthorns",
                "year" => "2006",
                "instruments" => "flute, viola (or English horn) and harp (or piano)",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "12.5",
                "audio_files" => [
                  0 => "music/xchamber/i_lingered_beside_the_hawthorns.mp3"
                ],
                "audio_details" => null
              ],
              [
                "title" => "Soldiers",
                "year" => "2003",
                "instruments" => "computer generated composition with or without live performers",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Old Pond",
                "year" => "2003",
                "instruments" => "bass or alto flute, clarinet, violin, violoncello and piano",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "14",
                "audio_files" => [
                  0 => "music/xchamber/old_pond.mp3"
                ],
                "audio_details" => [
                  0 => "Ensemble Talea-Halle (Germany)"
                ]
              ],
              [
                "title" => "Gray Clouds Parting",
                "year" => "2002",
                "instruments" => "variable ensemble",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Sleep's Shifting Darkness",
                "year" => "2001",
                "instruments" => "computer generated composition with or without live performers",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Duncan's Charge",
                "year" => "2000",
                "instruments" => "brass quintet",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "4",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Chozubachi",
                "year" => "1998-2000",
                "instruments" => "piano trio",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => [
                  0 => "music/xchamber/chozubachi.mp3"
                ],
                "audio_details" => [
                  0 => "Ensemble Talea-Halle (Germany)"
                ]
              ],
              [
                "title" => "In A Raindrop ... The Moon",
                "year" => "1995",
                "instruments" => "guitar trio",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Shishi - Odoshi",
                "year" => "1995",
                "instruments" => "flute, percussion and piano or harp",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "12",
                "audio_files" => [
                  0 => "music/xchamber/shishi_odoshi.mp3"
                ],
                "audio_details" => [
                  0 => "Alivin-Larson-Taylor Trio"
                ]
              ],
              [
                "title" => "Duncan's Charge",
                "year" => "1992",
                "instruments" => "two trumpets, trombone, bass trombone, piano or organ, two percussionists (optional)",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "4",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Where Are You Hiding, My Little Cricket?",
                "year" => "1990",
                "instruments" => "flute, clarinet, guitar or harp, percussion",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Blossom II",
                "year" => "1988",
                "instruments" => "one or more marimbas",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "7",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Blossom",
                "year" => "1987",
                "instruments" => "brass choir",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ]
            ],
            "electronic" => [
              [
                "title" => "Mist",
                "year" => "2013/2019",
                "instruments" => "computer generated sounds",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "13",
                "audio_files" => [
                  0 => "music/electronic/mist.mp3"
                ],
                "audio_details" => null
              ],
              [
                "title" => "As Memory Passes",
                "year" => "2011",
                "instruments" => "woodwind or string instrument, percussion(2), piano, with or without live electronics",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "12.5",
                "audio_files" => [
                  0 => "music/electronic/as_memory_passes_electronic.mp3"
                ],
                "audio_details" => [
                  0 => "Erasable color"
                ]
              ],
              [
                "title" => "A Necklace Of Dew",
                "year" => "2011",
                "instruments" => "clarinet and alto saxophone with effects pedals",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => [
                  0 => "music/electronic/a_necklace_of_dew.mp3"
                ],
                "audio_details" => [
                  0 => "Velocity2"
                ]
              ],
              [
                "title" => "Through The Scented Grasses And Broken Mists",
                "year" => "2011",
                "instruments" => "soprano saxophone and pre-recorded electronics",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9.5",
                "audio_files" => [
                  0 => "music/electronic/through_the_scented_grasses_and_broken_mists.mp3"
                ],
                "audio_details" => [
                  0 => "Jonathan Bergeron, soprano saxophone"
                ]
              ],
              [
                "title" => "The Ice Shoots Flame",
                "year" => "2005",
                "instruments" => "percussion duo and CD playback",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "10",
                "audio_files" => null,
                "audio_details" => null
              ],
              [
                "title" => "Soldiers",
                "year" => "2003",
                "instruments" => "computer generated sounds",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "12",
                "audio_files" => [
                  0 => "music/electronic/soldiers.mp3"
                ],
                "audio_details" => null
              ],
              [
                "title" => "Sleep's Shifting Darkness",
                "year" => "2001",
                "instruments" => "computer generated composition with or without live performers",
                "total_movements" => null,
                "versions" => null,
                "total_time" => "9",
                "audio_files" => null,
                "audio_details" => null
              ],
            ]

             //"xxx_template" => [
               //0 => [
                 //"title" => "XXXX",
                 //"year" => "xxx",
                 //"instruments" => "xxx",
                 //"total_movements" => "xxx",
                 //"versions" => "xxx",
                 //"total_time" => "xxx",
                 //"audio_files" => [
                   //0 => [
                     //"audio_track" => "xxx",
                     //"audio_details" => [
                       //0 => "xxx",
                       //1 => "xxx"
                     //]
                   //],
                   //1 => [
                     //"audio_track" => "xxx",
                     //"audio_details" => [
                       //0 => "xxx",
                       //1 => "xxx"
                     //]
                   //]
                 //]
               //]
             //]
           ]
         ] // end of bracket
       );
     }
}
