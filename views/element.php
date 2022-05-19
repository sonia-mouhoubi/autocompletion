<?php 
require_once('../models/CitiesRegions.php');
if (isset($_GET['id'])) {
    $id_url = explode("?id=",$_GET['id']);
    $id_url = end($id_url);

    $citiesRegions = new CitiesRegions;
    $InfosCityById = $citiesRegions->getCityById($id_url);
}
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
            <section class="infoCity">
                <h1>Résultat de la ville de <strong><?= $InfosCityById['titre']?></strong></h1>

                <img src="../assets/img/<?= $InfosCityById['image']?>" alt="img">
                
                <div>
                    <h2 id="infosCity"><strong><?= $InfosCityById['titre']?></strong></h2>

                    <p>Raptim igitur properantes ut motus sui rumores celeritate nimia praevenirent, vigore corporum ac levitate confisi per flexuosas semitas ad summitates collium tardius evadebant. et cum superatis difficultatibus arduis ad supercilia venissent fluvii Melanis alti et verticosi, qui pro muro tuetur accolas circumfusus, augente nocte adulta terrorem quievere paulisper lucem opperientes. arbitrabantur enim nullo inpediente transgressi inopino adcursu adposita quaeque vastare, sed in cassum labores pertulere gravissimos.</p>
                </div>
            </section>
        </main>
       
        <?php require_once('../views/require/footer.php');?>
    </body>
</html>