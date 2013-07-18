<?php

// Get an existing artist
$artist = Artists::findFirst('name = "Shinichi Osawa"');

// Create an album
$album         = new Albums();
$album->name   = 'The One';
$album->artist = $artist;

$songs = array();

// Create a first song
$songs[0]           = new Songs();
$songs[0]->name     = 'Star Guitar';
$songs[0]->duration = '5:54';

// Create a second song
$songs[1]           = new Songs();
$songs[1]->name     = 'Last Days';
$songs[1]->duration = '4:29';

// Assign the songs array
$album->songs = $songs;

// Save the album + its songs
$album->save();

