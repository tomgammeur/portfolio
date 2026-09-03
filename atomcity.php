<?php
echo "<br>";
require "design.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atom City - Tom Durieux</title>
</head>
<body>
    <br><br><br><br>
 <a href="projects.php" class="btn-portfolio" onclick="handleClick(event)">< Retour</a>
<br><br><br><br>
    <main>
    <h2>Atom City</h2>
    <img src="photos/screenatomcity.png" alt="tomg site" class="image-arrondie">
    <br><br>
<p>Projet de BTS pour une refonte du site de l'Atom City</p>
<br>
<p>Fait en PHP avec l'aide de MySQL</p>
<br><br><br><br>
<h2>Etat du projet</h2>
    <div class="en-cours">
        <h1>En cours</h1>
    </div>
<br><br><br><br>
    <h2>Languages</h2>
 <div class="skills-card">
    <div class="skill">
    <img src="photos/php.png" alt="PHP">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">PHP</span>
        <span class="percent">82,3 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 82.3%;"></div>
      </div>
    </div>
  </div>
  <div class="skill">
    <img src="photos/vscode.png" alt="Images">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">Images</span>
        <span class="percent">17,7 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 17.7%;"></div>
      </div>
    </div>
  </div>
<div class="skill">
    <img src="photos/mysql.png" alt="JavaScript">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">MYSQL</span>
        <p>Avec l'aide de MySQL</p>
</div>
</div>
</div>
</div>

<br><br><br><br>
    <h2>Github</h2>  
     <a href="https://github.com/tomgammeur/atom-city" class="btn-portfolio" onclick="handleClick(event)">Voir projet</a><br><br><br><br>
 </main>
</body>
</html>
<?php
require "footer.php";
?>