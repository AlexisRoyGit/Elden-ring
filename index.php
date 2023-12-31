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
    <title>Elden Ring : le site</title>
    <meta name="description" content="Venez visiter notre site dédié à l'univers du jeu de l'année 2022 Elden Ring">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <nav class="navigation">
        <a href="#" class="logo-placement"><img src="Logo/Elden Ring.png" alt="logo" class="logo"></a>
        <div class="side-nav" id="menu-mobile">
            <a href="#" class="close" id="buttonClose">x</a>
            <ul class="list-link">
                <li><a href="boss.php">Les boss</a></li>
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
        <a href="boss.php" class="undisplayed desktopboss">Les boss</a>
        <a href="zones.php" class="undisplayed desktopzones">Les zones</a>
        <a href="conseils.php" class="undisplayed desktopconseils">Astuces</a>
        <?php $session->linksNav() ?>
    </nav>
    <main>
        <h1 class="title">Bienvenue !!</h1>
        <img src="Medias/illustrationelden.jpg" alt="Photo d'accueil" class="illustrations">
        <h2 class="title">Venez découvrir l'univers riche de ce jeu vidéo avec nos différentes pages dédiées :</h2>
        <ul class="links">
            <li><a href="boss.html" target="_blank">Les boss</a></li>
            <li><a href="zones.html" target="_blank">Les zones</a></li>
            <li><a href="conseils.html" target="_blank">Astuces pour les débutants</a></li>
        </ul>
        <h3 class="title">Qui sommes-nous ?</h3>
        <img src="Medias/illustration2.jpg" alt="Illustration elden ring" class="illustrations">
        <p class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at tempor leo. In aliquet ullamcorper purus, eu tristique leo lobortis ullamcorper. Vestibulum sed dignissim mi, vel consectetur nisl. Proin egestas at urna ullamcorper cursus. Nunc ipsum ipsum, tempor at aliquet at, commodo nec erat. Suspendisse quis erat vehicula, tristique dui at, facilisis sapien. Donec viverra scelerisque auctor. Cras a aliquam ipsum, vitae vestibulum eros.
           Cras ullamcorper facilisis tellus. Nunc nulla nibh, cursus id purus a, euismod fringilla massa. Ut in arcu nibh. Quisque nec nulla risus. Fusce at mollis nulla, a iaculis leo. Maecenas dictum enim et suscipit vestibulum. Nam facilisis arcu sed est condimentum, ac feugiat tortor porta. Quisque congue risus sit amet bibendum suscipit 
        </p>
        <h3 class="title">Notre mission</h3>
        <img src="Medias/illustration-fans.jpg" alt="Fans de la license" class="illustrations">
        <p class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at tempor leo. In aliquet ullamcorper purus, eu tristique leo lobortis ullamcorper. Vestibulum sed dignissim mi, vel consectetur nisl. Proin egestas at urna ullamcorper cursus. Nunc ipsum ipsum, tempor at aliquet at, commodo nec erat. Suspendisse quis erat vehicula, tristique dui at, facilisis sapien. Donec viverra scelerisque auctor. Cras a aliquam ipsum, vitae vestibulum eros.
           Cras ullamcorper facilisis tellus. Nunc nulla nibh, cursus id purus a, euismod fringilla massa. Ut in arcu nibh. Quisque nec nulla risus. Fusce at mollis nulla, a iaculis leo. Maecenas dictum enim et suscipit vestibulum. Nam facilisis arcu sed est condimentum, ac feugiat tortor porta. Quisque congue risus sit amet bibendum suscipit 
        </p>
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