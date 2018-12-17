<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 6 exercice 2</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 6 exercice 2</h1>
                    <h3 align="center">Exercice 2</h3>
                    <p align="center">Faire une page index.php. Tester sur cette page que le paramètre age existe 
                        et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
                </div>
            </div>
            <p align="center"><a href="index.php?lastname=Nemare&firstname=Jean">Tester ici !</a></p>
            <?php
            if (isset($_GET['age'])) { // On teste si le paramètre age est bien présent si oui, on affiche l'echo ci-dessous
                echo '<p align="center">Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ' !</p>';
            } else { // s'il nous manque le paramètre age, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, vous avez oublié de nous donner votre age !</p>';
            }
            ?>
        </div>
    </body>
</html>

