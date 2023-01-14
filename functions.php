<?php

/**
 * Getting all files in a directory or folder
 * @param string $path - The files directory or folder
 * @return array|NULL
 */
function get_files($path){
    if(!empty($path) && $path !=""){
        $files = scandir($path,0);

        return $files;
    }

    return NULL;
}

/**
 * Get song details from the file name. It removes the file extension (.mp3) and split the file name into an array, giving us the artist name (in index 0 - first index) and song title (in index 1 - second index).
 * @param string $filename - The name of the file
 * @return array
 */
function get_song_details($filename){
    $filename = str_replace(".mp3","",$filename);
    $array = explode("-",$filename);

    $details = array(
        "artist_name" => trim($array[0]),
        "song_title" => trim($array[1])
    );

    return $details;
}

function get_artist($filename){
    $array = explode("-",$filename);

    $artist = trim($array[0]);

    return $artist;
}

function get_title($filename){
    $array = explode("-",$filename);

    $title = trim($array[1]);

    return $title;
}