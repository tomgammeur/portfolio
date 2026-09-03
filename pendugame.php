<?php
echo "<br>";
require "design.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendu Game - Tom Durieux</title>
</head>
<body>
    <br><br><br><br>
 <a href="projects.php" class="btn-portfolio" onclick="handleClick(event)">< Retour</a>
<br><br><br><br>
    <main>
    <h2>Pendu Game</h2>
    <img src="photos/pendugame.png" alt="tomg site" class="image-arrondie">
    <br><br>
<p>Jeu du pendu sur une base de mots dans un fichier JavaScript.</p>
<br>
<p>Fait avec HTML, CSS et JavaScript.</p>
<br><br><br><br>
<h2>Etat du projet</h2>
    <div class="fini">
        <h1>Terminé</h1>
    </div>
<br><br><br><br>
    <h2>Languages</h2>
 <div class="skills-card">
    <div class="skill">
    <img src="photos/CSS.png" alt="Java">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">CSS</span>
        <span class="percent">46,7 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 46.7%;"></div>
      </div>
    </div>
  </div>
  <div class="skill">
    <img src="photos/html.png" alt="HTML">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">HTML</span>
        <span class="percent">31,9 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 31.9%;"></div>
      </div>
    </div>
  </div>
<div class="skill">
    <img src="photos/javascript.webp" alt="JavaScript">
    <div class="skill-content">
      <div class="skill-header">
        <span class="title">JavaScript</span>
        <span class="percent">21,4 %</span>
      </div>
      <div class="bar">
        <div class="progress" style="width: 21.4%;"></div>
      </div>
    </div>
  </div>
    
</div>
<br><br><br><br>
    <h2>Github</h2>  
     <a href="https://github.com/tomgammeur/pendugame" class="btn-portfolio" onclick="handleClick(event)">Voir projet</a><br><br><br><br>
    <h2>Site</h2>  
     <a href="https://tomgammeur.github.io/pendugame/" class="btn-portfolio btn-portfolio sound-link" onclick="handleClick(event)">Voir site</a><br><br><br><br>
<audio id="clickSound" src="photos/click.ogg" preload="auto"></audio>
 </main>
 <script>
const sound = document.getElementById("clickSound");

document.querySelectorAll(".sound-link").forEach(link => {
    link.addEventListener("click", function(e) {
        e.preventDefault();

        sound.currentTime = 0;
        sound.play();

        setTimeout(() => {
            window.location.href = this.href;
        }, 180);
    });
});
</script>
</body>
</html>
<?php
require "footer.php";
?>