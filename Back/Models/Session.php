<?php

class Session 
{

    public function linksNav() 
    {
        if(isset($_SESSION['userIdentity'])) {
            echo '<li><a href="espace.php">Votre espace</a></li>';
        } else {
            echo '<li><a href="connexion.html">Connexion</a></li>';
        }
    }

    public function linksMobile() 
    {
        if(isset($_SESSION['userIdentity'])) {
            echo '<a href="espace.php" class="undisplayed desktopconnexion">Votre espace</a>';
        } else {
            echo '<a href="connexion.html" class="undisplayed desktopconnexion">Connexion</a>';
        }
    }

    public function deconnexion() 
    {
        unset($_SESSION['userIdentity']);
        unset($_COOKIE['PHPSESSID']);
        setcookie('PHPSESSID', '', time() - 3600);
    }
}