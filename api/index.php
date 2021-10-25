<?php
    require __DIR__ . '/../database.php';
    if(!empty($_GET["action"])){
        if($_GET["action"] == "albums") {
            $response = $database;
        } else if ($_GET["action"] == "getGenres") {
            $genres = [];
            foreach($database as $album) {
                if(!in_array($album['genre'], $genres)) {
                    $genres[] = $album['genre'];
                }
            }
            $response = $genres;
        } else if ($_GET["action"] == "filterGenre") {
            $genreSelected = $_GET["genre"];
            $dbFiltered = [];
            foreach($database as $album) {
                if($genreSelected == $album["genre"] || $genreSelected == "") {
                    $dbFiltered[] = $album;
                }
            };
            $response = $dbFiltered;
        }
    header('Content-Type: application/json');
    echo json_encode($response);
}