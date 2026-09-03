<?php
echo "<br>";
require "design.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de mes projets - Tom Durieux</title>
</head>
<body>
    <main>
    <h2>La liste de mes projets réalisés</h2>

            <a href="atomcity.php" class="event-link">
    <div class="event-card">
    <img src="photos/screenatomcity.png" alt="atom city" class="image-arrondie">
    <div class="event-content">
        <h3>Atom City</h3>
        <p class="event-date">PHP · SQL</p>
        <p class="event-description">
Projet de BTS pour une refonte du site de l'Atom City</p>
    </div>
</a>
</div>
    <a href="pendugame.php" class="event-link">
    <div class="event-card">
    <img src="photos/pendugame.png" alt="pendu game" class="image-arrondie">
    <div class="event-content">
        <h3>Pendu Game</h3>
        <p class="event-date">HTML · CSS · JavaScript</p>
        <p class="event-description">
Site représentant le jeu du pendu sur une base de mots dans un fichier JavaScript.
        </p>
    </div>
</a>
</div>
<a href="tomgsite.php" class="event-link">
    <div class="event-card">
        <img src="photos/tomgsite.png" alt="tomg site" class="image-arrondie">
        <div class="event-content">
            <h3>Le site Tom Gammeur</h3>
            <p class="event-date">HTML · CSS · PHP</p>
            <p class="event-description">
                Site internet de Tom Gammeur
            </p>
        </div>
    </div>
</a>

</main>
</body>
</html>
<?php
require "footer.php";
?>