<?php
echo "<br>";
require "design.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Durieux</title>
</head>
<body>
    <br><br><br><br>
    <main>
        <div class="entree-gauche">
    <h2>Tom Durieux</h2>
    </div>
    <h4>19 ans</h4>
<br>
    <h1>Etudiant et passioné d'informatique</h1>
    <br><br>         
<a href="projects.php" class="btn-portfolio">
Projets
</a>
<a href="https://github.com/tomgammeur" class="btn-portfolio" onclick="handleClick(event)">
GitHub
</a>
<p id="loadingMessage" style="display:none;">Chargement de la page, vous allez être redirigé...</p>
<p id="errorMessage" style="display:none;">Assurez-vous d'avoir une bonne connexion internet.</p>
<script>
function handleClick(event) {
    event.preventDefault();
    const loading = document.getElementById("loadingMessage");
    const error = document.getElementById("errorMessage");
    loading.style.display = "block";
    setTimeout(() => {
        error.style.display = "block";
    }, 10000);
    setTimeout(() => {
        loading.style.display = "none";
        error.style.display = "none";
    }, 20000);

    setTimeout(() => {
        window.location.href = event.target.href;
    }, 1000);
}
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h2>Qui suis-je ?</h2>
<p>Enthousiaste et motivé par l'informatique, je suis actuellement en BTS SIO (Services informatiques aux Organisations). Ceci me permettra de développer mes compétences afin de devenir <strong>développeur informatique.</strong></p>
<br><br><br><br>
<section class="academic">
    <h2>Mon parcours académique</h2>
    <div class="academic-container">
        <div class="academic-card">
            <h3>Baccalauréat Professionel</h3>
            <p>Mention "assez bien" et mention "Euro"</p>
            <span>2022 - 2025</span>
        </div>
        <div class="academic-card">
            <h3>BTS SIO</h3>
            <p>Option SLAM</p>
            <span>2025 - 2027</span>
        </div>
    </div>
</section>
<br><br><br><br>
<h2>Technologies que j'utilise</h2>
<h1>Languages</h1>
            <div class="social-box">
        <img src="photos/html.png" alt="HTML" title="HTML">
        <img src="photos/css.png" alt="CSS" title="CSS">        
        <img src="photos/python.png" alt="PYTHON" title="Python">
        <img src="photos/javascript.webp" alt="JAVASCRIPT" title="JavaScript">
        <img src="photos/php.png" alt="PHP" title="PHP">
        <img src="photos/ruby.png" alt="RUBY" title="Ruby">
        <img src="photos/angular.png" alt="ANGULAR" title="Angular">
        <img src="photos/terraform.webp" alt="TERRAFORM" title="Terraform">
        <img src="photos/mysql.png" alt="MYSQL" title="MySQL">
</div>
<br>
<h1>Logiciels</h1>
        <div class="social-box">
        <img src="photos/vscode.png" alt="VSCODE" title="VS Code">
        <img src="photos/jetbrains.svg" alt="JETBRAINS" title="JetBrains">
        <img src="photos/laragon.png" alt="LARAGON" title="Laragon">
        <img src="photos/xampp.webp" alt="XAMPP" title="XAMPP">
        <img src="photos/canva.svg" alt="CANVA" title="Canva">
        <img src="photos/source.png" alt="SOURCE" title="Source SDK">
        <img src="photos/archlinux.png" alt="ARCHLINUX" title="Arch Linux">
</div>
</main>
</body>
</html>
<?php
require "footer.php";
?>