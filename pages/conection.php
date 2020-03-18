<?php

$port = 3308;
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'programmation-web-3';
$mysqli = mysqli_connect($host, $user, $pass, $db, $port);
if (!$mysqli) {
    die('Probleme de connexion'.mysqli_error());
}
