<?php

// Get the song name and artist name from the webhook.
$song_name = $_POST['song_name'];
$artist_name = $_POST['artist_name'];

// Get the cover art URL from the Music Match API.
$cover_art_url = get_cover_art($song_name, $artist_name);

// If the cover art URL is not empty, display it in the header.
if ($cover_art_url) {
    echo '<img src="' . $cover_art_url . '">';
}
