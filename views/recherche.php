<?php 
require_once('../traitement/traitement-recherche.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barre de recherche</title>
        <meta name="description" content="Moteur de recherche">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet"/> 
        <script src="../assets/js/scripts.js" defer></script>
    </head>
        
    <body>
        <?php require_once('../views/require/header.php');?>

        <main>
            <section class="infoRegion">
                <h1>Résultat de la région <?= ucfirst($value['regions'])?></h1>

                <?php foreach($infosRegions as $value) {?>
                <a href="element.php?id=<?= $value['id']?>">
                    <div>
                        <p id="infosCity"><strong><?= $value['titre']?></strong></p>
                        <img src="../assets/img/<?= $value['image']?>" alt="img">
                        <p>Raptim igitur properantes ut motus sui rumores celeritate nimia praevenirent...</p>
                    </div>
                </a>
                <?php } ?>
            </section>
        </main>
        
        <?php require_once('../views/require/footer.php');?>
    </body>
</html>