<?php

require_once 'Models/Database.php';
require_once 'functions.php';

$database = new Database();

$mail = trim(htmlspecialchars($_POST['mail']));
$password = trim(htmlspecialchars($_POST['pass']));
$pseudo = trim(htmlspecialchars($_POST['pseudo']));
$avatar = $_FILES['avatar'];
$localisationImage = $avatar['tmp_name'];

if(emptyFieldsInscription($mail, $password, $pseudo, $avatar)) {
    if(emailValid($mail) && passwordVerifications($password) && pseudoLength($pseudo) && fileVerifications($avatar)) {
        $database->userInscription($mail, $password, $pseudo, $avatar);
        move_uploaded_file($localisationImage, '../Medias/'.$avatar['name'].'');
    } else {
        echo 'Un ou plusieurs champs sont invalides, vérifiez la validité des champs ainsi que votre avatar';
    }
} else {
    echo 'Veuillez remplir tous les champs';
}