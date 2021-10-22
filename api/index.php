<?php
    require __DIR__ . '/../database.php';
    header('Content-Type: application/json');
    if(!empty($_GET["genre"])) {
        $genreSelected = $_GET["genre"];
        $dbFiltered = [];
        foreach($database as $album) {
            if($genreSelected == $album["genre"]) {
                $dbFiltered[] = $album;
            }
        };
        echo json_encode($dbFiltered);
    } else {
        echo json_encode($database);
    }