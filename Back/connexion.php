<?php 

require_once 'Models/Database.php';
require_once 'functions.php';

$database = new Database();

$mail = trim(htmlspecialchars($_POST['email']));
$password = trim(htmlspecialchars($_POST['password']));

if(emptyFieldsConnexion($mail, $password)) {
    if(emailValid($mail) && passwordVerifications($password)) {
        $database->userConection($mail, $password);
    } else {
        echo 'Les données rentrées sont invalides veuillez réessayer';
    }
} else {
    echo 'Veuillez remplir les champs nécessaires';
}