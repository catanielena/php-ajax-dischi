<?php
    require __DIR__ . '/../database.php';
    $db = json_encode($database);
    header('Content-Type: application/json');
    echo $db;