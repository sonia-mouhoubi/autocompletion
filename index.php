<?php 
// require_once('models/Cities.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barre de recherche</title>
        <meta name="description" content="Moteur de recherche">
        <link href="assets/css/styles.css" rel="stylesheet"/> 
        <script src="assets/js/scripts.js"></script>
    </head>
        
    <body>
        <?php require_once('views/require/header.php');?>

        <main>
            <section class="home">
                <h1>Recherche</h1>
                <h2>Filtrer par région ou par ville</h2>

                <form action="">
                    <div>
                        <input class="input" type="text" id="search" placeholder="Recherche">
                        <a href=""><img src="assets/img/search.svg" alt=""></a>
                    </div>

                    <div id="suggestionsFirstLetter"></div>

                    <div id="suggestions"></div>
                </form>
            </section>
        </main>
       
        <?php require_once('views/require/footer.php');?>
    </body>
</html>