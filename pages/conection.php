<?php

$port = 3308;
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'programmation-web-3';
$mysqli = mysqli_connect($host, $user, $pass, $db, $port);

mysqli_set_charset($mysqli, 'utf8');

if (mysqli_connect_errno()) {
    echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
    exit;
}

/*if (!$mysqli) {
    die('Probleme de connexion'.mysqli_error());
}*/
