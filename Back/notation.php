<?php

require_once 'Models/Database.php';

$database = new Database();

$identity = $_GET['client'];
$note = $_GET['notation'];

$database->submitStarNotation($identity, $note);