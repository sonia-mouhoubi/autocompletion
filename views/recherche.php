<?php 
require_once('../models/CitiesRegions.php');
$region_url = explode("?id=",$_GET['search']);
$region_url = end($region_url);

$citiesRegions = new CitiesRegions;
$infosRegions = $citiesRegions->getRegionById($region_url);

// foreach($infosRegions as $value) {

// }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barre de recherche</title>
        <meta name="description" content="Moteur de recherche">
        <link href="../assets/css/styles.css" rel="stylesheet"/>  
        <script src="../assets/js/scripts.js"></script>
        <!-- <script src="../assets/js/script-regions.js"></script> -->

    </head>
        
    <body>
    <?php require_once('../views/require/header.php');?>

    <main>
        <section class="infoRegion">
            <h1>Résultat de la région</h1>

            <?php foreach($infosRegions as $value) {?>
            <a href="element.php?id=<?= $value['id']?>">
                <div>
                    <p id="infosCity"><strong><?= $value['titre']?></strong></p>
                    <img src="../assets/img/<?= $value['image']?>" alt="img">
                    <p>Raptim igitur properantes ut motus sui rumores celeritate nimia praevenirent.</p>
                </div>
            </a>
            <?php } ?>
        </section>
    </main>

        <?php require_once('../views/require/footer.php');?>
    </body>
</html>