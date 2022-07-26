<!-- consegna -->
<!-- Stampare a schermo una decina di dischi musicali 
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà,
attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. -->

<?php require __DIR__ . './database.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
    </header>

    <main>
        <div class="list">

            <?php foreach ($database as $album) { ?>
                <div class="album">
                    <div class="card">
                        <img src="<?php echo $album['poster']?>" alt="<?php echo $album['title']?>">
                        <h5><?php echo $album['title']?></h5>
                        <div class="author-name"><?php echo $album['author']?></div>
                        <div class="description"><?php echo $album['year']?></div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </main>
    
</body>
</html>