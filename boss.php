<?php  
    if(isset($_COOKIE['PHPSESSID'])) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Boss</title>
    <meta name="description" content="Cette page est dédiée aux différents boss rencontrés dans Elden Ring">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/boss.css">
</head>
<body>
    <nav class="navigation">
        <a href="index.html" class="logo-placement"><img src="Logo/Elden Ring.png" alt="logo" class="logo"></a>
        <div class="side-nav" id="menu-mobile">
            <a href="#" class="close" id="buttonClose">x</a>
            <ul class="list-link">
                <li><a href="#">Les boss</a></li>
                <li><a href="zones.php">Les zones</a></li>
                <li><a href="conseils.php">Astuces</a></li>
                <?php require_once 'Back/controller-session.php'; $session->linksMobile() ?>
            </ul>
        </div>
        <a href="#" class="burger" id="buttonOpen">
            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" fill="black" class="bi bi-bluetooth" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8.543 3.948 1.316 1.316L8.543 6.58zm0 8.104 1.316-1.316L8.543 9.42zm-1.41-4.043L4.275 5.133l.827-.827L7.377 6.58V1.128l4.137 4.136L8.787 8.01l2.745 2.745-4.136 4.137V9.42l-2.294 2.274-.827-.827L7.133 8.01ZM7.903 16c3.498 0 5.904-1.655 5.904-8.01 0-6.335-2.406-7.99-5.903-7.99C4.407 0 2 1.655 2 8.01 2 14.344 4.407 16 7.904 16Z"/>
              </svg>
        </a>
        <a href="#" class="undisplayed desktopboss">Les boss</a>
        <a href="zones.php" class="undisplayed desktopzones">Les zones</a>
        <a href="conseils.php" class="undisplayed desktopconseils">Astuces</a>
        <?php $session->linksNav() ?>
    </nav>
    <main>
        <h1 class="title">Les boss majeurs</h1>
        <div class="container">
            <div class="fiche">
                <img src="Medias/godrick.png" alt="Godrick">
                <p class="title"><b>Godrick le greffé</b></p>
                <ul>
                    <li>Degats : 2000</li>
                    <li>Vie : 15000</li>
                    <li>Conseils : Arme à distance</li>
                </ul>
            </div>
            <div class="fiche">
                <img src="Medias/margit.jpg" alt="Margit">
                <p class="title"><b>Margit le déchu</b></p>
                <ul>
                    <li>Degats : 1500</li>
                    <li>Vie : 14000</li>
                    <li>Conseils : Prudence</li>
                </ul>
            </div>
            <div class="fiche">
                <img src="Medias/rennala.jpg" alt="Rennala">
                <p class="title"><b>Rennala reine de la pleine lune</b></p>
                <ul>
                    <li>Degats : 5000</li>
                    <li>Vie : 20000</li>
                    <li>Conseils : Evitez la magie</li>
                </ul>
            </div>
            <div class="fiche">
                <img src="Medias/radahn.png" alt="Radahn">
                <p class="title"><b>Radahn le fléau des astres</b></p>
                <ul>
                    <li>Degats : 5000</li>
                    <li>Vie : 30000</li>
                    <li>Conseils : Utiliser sa monture</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <div class="left">
            <p>Nous contacter</p>
            <ul>
                <li>Notre <a href="mailto:eldenringsite@gmail.com">adresse mail</a></li>
                <li>Notre <a href="tel:0123456789">numéro de téléphone</a></li>
            </ul>
        </div>
        <div class="right">
            <p>En savoir plus</p>
            <ul>
                <li>Notre <a href="politiqueconf.html">politique de confidentialité</a></li>
                <li>Nos <a href="#">partenaires</a></li>
            </ul>
        </div>
    </footer> 
    <script src="JS/side-menu.js"></script> 
</body>
</html>