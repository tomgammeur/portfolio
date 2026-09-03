<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <footer>
        <h2>Contact</h2>

            <div class="social-box">
    <a href="https://github.com/tomgammeur" target="_blank">
        <img src="photos/github.png" alt="RSS">
    </a>
    <a href="https://www.linkedin.com/in/tom-durieux-a4ab243a6/" target="_blank">
        <img src="photos/linkedin.png" alt="LinkedIn">
    </a>
</div>
    © <?php echo date("Y"); ?> Tom Durieux    
    <br>
    <br>
<a href="#" class="footer-btn" id="don-btn">
    Faire un don
</a>
<div class="donation-overlay" id="donation-overlay">

    <div class="donation-popup">

        <button class="close-donation" id="close-donation">
            ×
        </button>

        <h2>Faire un don 💜</h2>

        <p>
            Vous serez dirigé sur mon Revolut.
        </p>
        <a
            href="https://revolut.me/tomiekuromi"
            class="continue-donation"
        >
            Continuer
        </a>
    </div>
</div>
<script>
    setTimeout(function() {
        document.getElementById("don-btn").classList.add("show");
    }, 4000);
    const donBtn = document.getElementById("don-btn");
    const donationOverlay = document.getElementById("donation-overlay");
    const closeDonation = document.getElementById("close-donation");

    // Ouvrir la fenêtre
    donBtn.addEventListener("click", function(event) {
        event.preventDefault();
        donationOverlay.classList.add("active");
    });

    // Fermer avec le X
    closeDonation.addEventListener("click", function() {
        donationOverlay.classList.remove("active");
    });

    // Fermer en cliquant en dehors de la fenêtre
    donationOverlay.addEventListener("click", function(event) {
        if (event.target === donationOverlay) {
            donationOverlay.classList.remove("active");
        }
    });
</script>
</footer>
</body>
</html>