<?php
echo "<br>";
require "design.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le site Tom Gammeur - Tom Durieux</title>
</head>
<body>
    <br><br><br><br>

 <a href="projects.php" class="btn-portfolio" onclick="handleClick(event)">< Retour</a>
<br><br><br><br>


    <main>
    <h2>Le site Tom Gammeur</h2>
    <img src="photos/tomgsite.png" alt="tomg site" class="image-arrondie">
    <br><br>
<p>Site internet de Tom Gammeur</p>
<br>
<p>Il contient une page d'acceuil avec les liens des dernieres vidéos YouTube, du live. Il y'a une page replay, une page contact ainsi que des codes erreur.</p>
<br><br><br><br>
<h2>Etat du projet</h2>
    <div class="fini">
        <h1>Terminé</h1>
    </div>
<br><br><br><br>
    <h2>Languages</h2>
 <div class="skills-card">
  <div class="skill">
    <img src="photos/html.png" alt="HTML">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">HTML</span>
        <span class="percent">82,8 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 82.8%;"></div>
      </div>
    </div>
  </div>
  <div class="skill">
    <img src="photos/CSS.png" alt="Java">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">CSS</span>
        <span class="percent">8,5 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 8.5%;"></div>
      </div>
    </div>
  </div>
  <div class="skill">
    <img src="photos/php.png" alt="PHP">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">PHP</span>
        <span class="percent">4,5 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 4.5%;"></div>
      </div>
    </div>
  </div>
  <div class="skill">
    <img src="photos/javascript.webp" alt="JavaScript">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">JavaScript</span>
        <span class="percent">4,2 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 4.2%;"></div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br>
    <h2>Github</h2>  
     <a href="https://github.com/tomgammeur/TomGammeurWebsite" class="btn-portfolio" onclick="handleClick(event)">Voir projet</a>
<br><br><br><br>
</main>
</body>
</html>
<?php
require "footer.php";
?>