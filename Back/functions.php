<?php

function lengthPassword(string $pass) {
    return strlen($pass) > 10 && strlen($pass) < 20;
}

function charactersPasword(string $pass) {
    $maj = '/[A-Z]/';
    $number = '/[0-9]/';
    
    return boolval(preg_match($maj, $pass) && preg_match($number, $pass));
}

function emailValid(string $mail) {
    $pattern = '/^[A-z0-9_.+-]+@[A-z0-9-]+\.[A-z0-9-.]+$/';
    return boolval(preg_match($pattern, $mail));
}