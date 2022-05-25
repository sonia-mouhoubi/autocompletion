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
        <script src="../assets/js/scripts.js"></script>
    </head>
        
    <body>
        <main class="home">
            <section>
                <h1>Recherche</h1>

                <form action="" method="GET" id="form">
                        <input type="text" id="search" name="search" placeholder="Rechercher par région ou par ville">

                    <div id="suggestionsFirstLetter"></div>

                    <div id="suggestionsBetweenLetter"></div>
                </form>
            </section>
        </main>
       
        <?php require_once('../views/require/footer.php');?>
    </body>
</html>