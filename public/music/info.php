<html>
<head>
<title>Track Information</title>
</head>

<body>
<center>

<?

$songtitle = $_REQUEST["songtitle"];

if ($songtitle == old_pond) {
        $output = <<<HERE
            Old Pond - for Bass Flute, Clarinet, Violin, Violoncello, &amp; Piano<br><br>
            Ensemble Talea-Halle

HERE;
} else if ($songtitle == knots) {
        $output = <<<HERE
            Knots - for Free Improvisation Soloist and Percussion Quartet<br><br>
            Frank Rosaly, drum set soloist <br />
            Northern Arizona University Percussion Ensemble <br />
            Owen Davis, Jordan Lewis, Cassandra Sadelle, Chris Vennel
HERE;
} else if ($songtitle == as_memory_passes_electronic) {
        $output = <<<HERE
            As Memory Passes - for Alto Saxophone, Percussion(2) and Piano with Live Electronics<br><br>
            Erasable Color <br />
            Lisa Stegall, alto saxophone <br />
            Owen Davis and Drew Worden, percussion <br />
            Jess Ryan, piano <br />
            Bruce Reiprich, live electronics
HERE;
} else if ($songtitle == as_memory_passes_acoustic) {
        $output = <<<HERE
            As Memory Passes - for Alto Saxophone, Percussion(1) and Piano<br><br>
            Erasable Color <br />
            Lisa Stegall, alto saxophone <br />
            Owen Davis and Drew Worden, percussion <br />
            Jess Ryan, piano
HERE;
} else if ($songtitle == scented_grasses) {
        $output = <<<HERE
            Through The Scented Grasses And Broken Mists - for Soprano Saxophone and CD Playback<br><br>
            Jonathan Bergeron, soprano saxophone
HERE;
} else if ($songtitle == chozubachi) {
        $output = <<<HERE
            Chozubachi - for Piano Trio<br><br>
            Ensemble Talea-Halle
HERE;
} else if ($songtitle == moon_in_blue_shadows) {
        $output = <<<HERE
            Moon in Blue Shadows - for Flute &amp; Piano<br><br>
            Laura Baron, flute <br>
            Rita Borden, piano
HERE;
} else if ($songtitle == shishi_odoshi) {
        $output = <<<HERE
            Shishi-Odoshi - for Flute, Harp &amp; Percussion<br><br>
            Alivin-Larson-Taylor Trio
HERE;
} else if ($songtitle == weeping_willow) {
        $output = <<<HERE
            Weeping Willow - for Soprano &amp; String Quartet<br><br>
            Composers Inc.<br>
            Deborah Raymond, soprano<br>
            Phillip Santos and Victor Romasevich, violin<br>
            Betsy London, viola<br>
            Lawrence Granger, violoncello
HERE;
} else if ($songtitle == dusk) {
        $output = <<<HERE
            Dusk - for SATB Choir<br><br>
            The Gregg Smith Singers<br>
            Gregg Smith, director
HERE;
} else if ($songtitle == lullaby) {
        $output = <<<HERE
            Lullaby - for Violin &amp; Orchestra<br><br>
            William Barbini, violin<br>
            Northern Arizona University Symphony Orchestra<br>
            Victor Liva, conductor
HERE;
} else if ($songtitle == the_river_empties_into) {
        $output = <<<HERE
            The River Empties Into - for Soprano &amp; Orchestra<br><br>
            Deborah Raymond, soprano<br>
            Performing Arts Institute Symphony Orchestra<br>
            Sarah Hicks, conductor
HERE;
} else {
    print "I don't know that one...";
} // END IF

print "<div>";
print $output;
print "</div>";
?>
</center>
</body>
</html>
