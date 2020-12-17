<?php
include 'dischi.php';
// var_dump($dischi);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi con Php</title>
        <link rel="stylesheet" href="../public/php/app.css">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="logo-container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="">
            </div>
            <h1>
                DiscoDisco
            </h1>
        </header>
        <main>
            <div class="container">
                <div class="card-container">
                    <?php foreach ($dischi as $disco) { ?>
                    <div class="box-card">
                        <div class="card-image-container">
                            <img src="<?php echo $disco['poster'];?>" alt="<?php echo $disco['title'];?>">
                        </div>
                        <p><?php echo $disco['title'];?></p>
                        <p><?php echo $disco['author'];?></p>
                        <p><?php echo $disco['year'];?></p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>
    </body>
</html>
