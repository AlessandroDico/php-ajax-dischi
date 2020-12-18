<?php
include '../forAllDisc.php';
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <select class="genre-select">
                    <option value="">All Genres</option>
                    <?php foreach ($arrayGenres as $genre) { ?>
                        <option value="<?php echo $genre ?>"><?php echo $genre ?></option>
                    <?php
                    } ?>
                </select>
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

<!-- script handlebars devo metterli altrimenti avendo linkato il file js con handlebars mi darebbe errore.. nonostante questi script non popolo il mio file con handlebars ma con php -->
<!-- PS. se volessi popolare con handlebars il mio file dovrei dare al body l Id html-body in modo che entri nella prima if di JS -->
        <script id="entry-template" type="text/x-handlebars-template">
                <div class="box-card">
                    <div class="card-image-container">
                        <img src="{{poster}}" alt="{{titolo}}">
                    </div>
                    <p>{{titolo}}</p>
                    <p>{{autore}}</p>
                    <p>{{anno}}</p>
                </div>
        </script>
        <script id="select-template" type="text/x-handlebars-template">
            <option value="{{genre}}">{{genre}}</option>
        </script>
        <script src="../public/ajax/app.js" charset="utf-8"></script>
    </body>
</html>
