
    <?php

    // Create a robot
    $artist = new Artists();
    $artist->name = 'Shinichi Osawa';
    $artist->country = 'Japan';

    // Create an album
    $album = new Albums();
    $album->name = 'The One';
    $album->artist = $artist; //Assign the artist
    $album->year = 2008;

    //Save both records
    $album->save();

