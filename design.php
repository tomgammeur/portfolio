<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/codec-pro" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Codec Pro";
            background: radial-gradient(circle at top, #1a1a40, #0d0d1a);
            color: white;
        }
        header {
    font-family: "Codec Pro";
    display: flex;
    justify-content: center;   
    align-items: center;       
    gap: 30px;                 
    padding: 0px 0;
    background: linear-gradient(90deg, #2c00beff, #5900b2ff);
    border-radius: 100px;
    max-width: 700px;
    margin: 20px auto;
}
        .btn-portfolio {
    display: inline-block; 
    background: linear-gradient(45deg, #590353ff, #7c058cff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
    font-weight: bold; 
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
   
}

.btn-portfolio:hover {
    background: linear-gradient(45deg, #60045aff, #b307caff);
    transform: scale(1.05);
}
.btn-portfolio:active {
    background: linear-gradient(45deg, #60045aff, #b307caff);
    transform: scale(0.82);
}
        .btn-header {
    background: linear-gradient(45deg, #1e0575ff, #0e024dff);
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    transition: all 0.5s;
    font-weight: bold; 
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
   
}

.btn-header:hover {
    background: linear-gradient(45deg, #2604a1ff, #0e024dff);
    transform: scale(1.05);
}
.btn-header:active {
    background: linear-gradient(45deg, #1e0575ff, #0e024dff);
    transform: scale(0.82);
}

        header h1 {
    font-family: "Codec Pro";
            font-size: 3.5rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: white;
            text-shadow: 
                0 0 5px #fff,
                0 0 15px #ff00ff,
                0 0 25px #00ffff;
        }



        nav {
            margin-top: 25px;
    font-family: "Codec Pro";

        }

nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
    margin: 0;
    padding: 0;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
    transition: 0.3s;
}

nav ul li a:hover {
    text-shadow: 0 0 10px white;
}

        nav ul li a:hover {
    font-family: "Codec Pro";
            background: rgba(255,255,255,0.2);
            box-shadow: 0 0 10px #fff;
            transform: scale(1.1);
        }
        main {
            padding: 60px 20px;
            text-align: center;
    font-family: "Codec Pro";
        }

        main h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #00ffff;
    font-family: "Codec Pro";

        }
        .image-arrondie {
    width: 400px;
    border-radius: 40px;
}

        main p {
    font-family: "Codec Pro";
            font-size: 1.2rem;
            max-width: 700px;
            margin: auto;
            line-height: 1.6;
        }

        footer {
    font-family: "Codec Pro";
            background: #111;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            font-size: 0.9rem;
            color: #aaa;
            border-radius: 10px;

        }


.social-box {
    background: linear-gradient(90deg, #01448dff, #2b006bff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}
.social-box-metro {
    background: linear-gradient(90deg, #bb0000ff, #4d0100ff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

.social-box-metro img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); 
    transition: 0.3s ease;
}

.social-box-metro img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}

.social-box-bus {
    background: linear-gradient(90deg, #0009b9ff, #210057ff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

.social-box-bus img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); /* rend les icônes blanches */
    transition: 0.3s ease;
}

.social-box-bus img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}

.social-box-vlille {
    background: linear-gradient(90deg, #6c0093ff, #390152ff);
    backdrop-filter: blur(10px);
    padding: 20px 40px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    gap: 25px;
    width: fit-content;
    margin: 40px auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

.social-box-vlille img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); /* rend les icônes blanches */
    transition: 0.3s ease;
}

.social-box-vlille img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}
.social-box img {
    width: 35px;
    height: 35px;
    filter: brightness(0) invert(1); /* rend les icônes blanches */
    transition: 0.3s ease;
}

.social-box img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}
.logo {
    width: 100px;
    height: auto;
    transition: 0.3s ease;
    cursor: pointer;

}

.logo:hover {
    width: 110px;
    height: auto;
    transition: 0.6s ease;
    transform: scale(1.1);

}
.logo:active {
    width: 100px;
    height: auto;
    transition: 0.3s ease;
    transform: scale(1.1);
}
.logo:target {
    width: 50px;
    height: auto;
    transition: 0.3s ease;
    transform: scale(1.1);
}


.logo-small {
    width: 60px;
}
.events-container {
    display: flex;
    gap: 40px;
    justify-content: center;
    flex-wrap: wrap;
}
h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #00ffff;
    font-family: "Codec Pro";

        }

.event-card {

    width: 320px;
    background: #1a1a2e;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    transition: 0.3s ease;
    margin: 40px auto;
}

.event-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.6);
}

.event-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.event-content {
    padding: 20px;
    color: white;
}

.event-content h3 {
    margin: 0 0 10px 0;
    font-size: 1.4rem;
}

.event-date {
    font-size: 0.9rem;
    color: #00ffff;
    margin-bottom: 10px;
}

.event-description {
    font-size: 0.95rem;
    line-height: 1.4;
}
h1 {
    display: inline-block; /* 👈 important */
    background: linear-gradient(45deg, #5700aeff, #5c0053ff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
}

.fini h1 {
    display: inline-block; 
    background: linear-gradient(45deg, #03692cff, #005422ff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
}
.abandonne h1 {
    display: inline-block; 
    background: linear-gradient(45deg, #454545ff, #252525ff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
}
.en-cours h1 {
    display: inline-block; 
    background: linear-gradient(45deg, #7e0000ff, #640000ff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
}
.a-renover   h1 {
    display: inline-block; 
    background: linear-gradient(45deg, #5e0087ff, #37024eff);
    color: white;
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 10px 20px;
    font-size: 29px;
    transition: all 0.5s;
}

.search-bar{
    font-family: "Codec Pro";
    display:block;
    margin:20px auto 40px auto;
    padding:10px 15px;
    width:200px;
    border-radius:20px;
    border:none;
    font-size:16px;
    text-align:center;
}
.academic {
    text-align: center;
    padding: 60px 20px;
}

.academic-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.academic-card {
    background: linear-gradient(135deg, #1a2a6c, #6a00ff);
    color: white;
    padding: 25px;
    border-radius: 20px;
    width: 220px;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.4);
    transition: transform 0.3s;
}

.academic-card:hover {
    transform: translateY(-8px);
}

.academic-card h3 {
    margin-bottom: 10px;
}

.academic-card span {
    font-size: 14px;
    opacity: 0.8;
}


.skills-card {
  width: 500px;
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #00a6ffff;
  border-radius: 10px;
  background: #0f0f1a;
}

.skill {
  display: flex;
  align-items: center;
  margin-bottom: 25px;
}

.skill img {
  width: 60px;
  height: 60px;
  margin-right: 15px;
  filter: brightness(0) invert(1); 
  transition: 0.3s ease;
}


.skill img:hover {
    transform: scale(1.2);
    filter: brightness(0) invert(1) drop-shadow(0 0 8px #00ffff);
}

.skill-content {
  flex: 1;
}

.skill-header {
  display: flex;
  justify-content: space-between;
    color: #00ffff;
  font-weight: bold;
  margin-bottom: 5px;
}

.title {
  font-size: 20px;
}

.percent {
  font-size: 14px;
  color: #ffffffff;
}
.scroll-container::-webkit-scrollbar {
    height: 8px;
}
.scroll-container::-webkit-scrollbar-thumb {
    background: linear-gradient(90deg, #01448dff, #2b006bff)
    border-radius: 4px;
}
.bar {
  width: 100%;
  height: 8px;
  background: #2a2a2a;
  border-radius: 10px;
  overflow: hidden;
}

.progress {
  height: 100%;
  background: linear-gradient(90deg, #7c4dff, #b388ff);
  border-radius: 10px;
}
.event-link {
    text-decoration: none;
}
@keyframes slideFadeInLeft {
  0% {
    transform: translateX(-60px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

.entree-gauche {
  animation: slideFadeInLeft 0.9s cubic-bezier(0.22, 1, 0.76, 1) forwards;
  will-change: transform, opacity;
}
.footer-btn {
    display: inline-block;
    background: linear-gradient(45deg, #002b03ff, #004820ff);
    font-family: "Codec Pro";
    border: none;
    border-radius: 100px;
    padding: 7px 15px;
    font-weight: bold;
    text-decoration: none;
    color: white;
    font-size: 0.9rem;
    opacity: 0;
    transform: translateX(-80px);
    transition: opacity 0.7s ease, transform 0.7s ease;
    pointer-events: none;
}

.footer-btn.show {
    opacity: 1;
    transform: translateX(0);
    pointer-events: auto;
}

.footer-btn:hover {
    background: linear-gradient(45deg, #004405ff, #007031ff);
    transform: translateX(0) scale(1.05);
    box-shadow: 0 0 10px #00ffff;
}

.footer-btn:active {
    background: linear-gradient(45deg, #00a50bff, #07b954ff);
    transform: translateX(0) scale(0.9);
}
/* ===== POPUP DON ===== */

.donation-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(6px);

    display: flex;
    justify-content: center;
    align-items: center;

    opacity: 0;
    visibility: hidden;
    transition: 0.3s ease;

    z-index: 9999;
}

.donation-overlay.active {
    opacity: 1;
    visibility: visible;
}

.donation-popup {
    position: relative;
    width: 380px;
    max-width: 90%;
    padding: 30px;
    border-radius: 25px;

    background: linear-gradient(135deg, #17172e, #241044);
    border: 1px solid #7c4dff;

    box-shadow:
        0 0 20px rgba(124, 77, 255, 0.5),
        0 15px 40px rgba(0, 0, 0, 0.6);

    text-align: center;

    transform: scale(0.8);
    transition: 0.3s ease;
}

.donation-overlay.active .donation-popup {
    transform: scale(1);
}

.donation-popup h2 {
    color: #00ffff;
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.donation-popup p {
    color: white;
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 25px;
}

/* Bouton X */

.close-donation {
    position: absolute;
    top: 10px;
    right: 15px;

    background: transparent;
    border: none;
    color: white;

    font-size: 25px;
    font-family: "Codec Pro";

    cursor: pointer;

    transition: 0.3s ease;
}

.close-donation:hover {
    color: #00ffff;
    transform: scale(1.2);
}

/* Bouton continuer */

.continue-donation {
    display: inline-block;

    background: linear-gradient(45deg, #590353ff, #7c058cff);
    color: white;

    font-family: "Codec Pro";
    font-weight: bold;

    text-decoration: none;

    border-radius: 100px;
    padding: 9px 20px;

    transition: 0.3s ease;
}

.continue-donation:hover {
    background: linear-gradient(45deg, #60045aff, #b307caff);
    transform: scale(1.05);
    box-shadow: 0 0 12px #ff00ff;
}

.continue-donation:active {
    transform: scale(0.9);
}
    </style>
</head>
<body>
<header>
        <img src="photos/logotomg.png" onclick="location.href='index.php'" alt="TomGamme" class="logo">
    <nav>
        <ul>
            <li><a href="index.php" class="btn-header sound-link">Acceuil</a></li>
            <li><a href="projects.php" class="btn-header sound-link">Projets</a></li>
        </ul>
    </nav>
</header>
</body>
</html>