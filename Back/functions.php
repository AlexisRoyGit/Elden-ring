<?php

function lengthPassword(string $pass): bool {
    return strlen($pass) > 10 && strlen($pass) < 20;
}

function charactersPasword(string $pass): bool {
    $maj = '/[A-Z]/';
    $number = '/[0-9]/';
    
    return boolval(preg_match($maj, $pass) && preg_match($number, $pass));
}

function emailValid(string $mail): bool {
    $pattern = '/^[A-z0-9_.+-]+@[A-z0-9-]+\.[A-z0-9-.]+$/';
    return boolval(preg_match($pattern, $mail));
}

function fileWeight(array $file): bool {
    return $file['size'] < 4194304; 
}

function fileExtesion(array $file): bool {
    $pattern = '/\.(jpg|jpeg|png|gif)$/';
    return boolval(preg_match($pattern, $file['name']));
}

function fileType(array $file): bool {
    return $file['type'] == "image/gif" || $file['type'] == "image/jpeg" || $file['type'] == "image/jpg" || $file['type'] == "image/png";
}

function fileError(array $file): bool {
    return $file['error'] == 0;
}

function fileVerifications(array $file): bool {
    return fileWeight($file) && fileExtesion($file) && fileType($file) && fileError($file);
}

function emptyFieldsConnexion(string $mail, string $password) {
    return isset($mail) && isset($password) && $mail !== '' && $password !== '';
}

function emptyFieldsInscription(string $mail, string $password, string $pseudo, array $file) {
    return isset($mail) && isset($password) && isset($pseudo) && isset($file) && $mail !== '' && $password !== '' && $pseudo !== '';
}