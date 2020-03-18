<?php

$con = mysqli_connect('localhost', 'root', '', 'programmation-web-3');
if (!$con) {
    die('Probleme de connexion'.mysqli_error());
}
