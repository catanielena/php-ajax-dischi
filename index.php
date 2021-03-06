<?php
    include __DIR__ . "/database.php";
    $db = $database;
    if(!empty($_GET["genre"])) {
        if($_GET["genre"] == "all") {
            $db = $database;
        } else {
            $db = array_filter($database, function ($album) {
                return ($album['genre'] == $_GET["genre"]);
            });
        }
    }

    $genres = [];
    foreach($database as $album) {
        if(!in_array($album['genre'], $genres)) {
            $genres[] = $album['genre'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Roboto_Google-font -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Roboto_Google-font -->
        <link rel="stylesheet" href="css/style.css">
        <title>php-ajax-dischi</title>
    </head>

    <body>
        <?php include __DIR__ . '/partials/template/header.php'; ?>
        <main>
            <!-- collection -->
            <section class="collection">
                <?php foreach($db as $album): ?>
                    <!-- album -->
                    <div class="album">
                        <div class="album__img">
                            <img src="<?="{$album['poster']}"?>" alt="">
                        </div>
                        <h4 class="album__title"><?= "{$album['title']}";?></h4>
                        <ul class="album__info">
                            <li><?= "{$album['year']}";?></li>
                            <li><?= "{$album['author']}";?></li>
                        </ul>
                    </div>  
                    <!-- /album -->
                <?php endforeach; ?>
            </section>
            <!-- /collection -->
        </main>
    </body>

</html>