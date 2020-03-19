<?php

require_once 'conection.php';

if (isset($_POST['ajouter']) && $_POST['ajouter'] == 1) {
    $prenom = $_POST['firstname'];
    $nom = $_POST['lastname'];
    $courriel = $_POST['email'];
    $userName = $_POST['username'];
    $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

    $ajouterSql = "INSERT INTO tp_user (firstName, lastName, email, userName, userPassword)
    VALUES ('$prenom', '$nom', '$courriel', '$userName', '$password');";

    mysqli_query($mysqli, $ajouterSql);
    if (mysqli_connect_errno()) {
        echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
        exit;
    }
    header('Location: ind.php');
} elseif (isset($_POST['modifier']) && $_POST['modifier'] == 2) {
    $id = $_POST['id'];
    $prenom = $_POST['firstname'];
    $nom = $_POST['lastname'];
    $courriel = $_POST['email'];
    $userName = $_POST['username'];
    $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);
    /* SINTAXE A REGLERRRR*/
    $ajouterSql = "UPDATE tp_user SET firstName='$prenom',lastName='$nom',email='$courriel',userName='$userName',userPassword='$password' WHERE id=$id";

    mysqli_query($mysqli, $ajouterSql);
    if (mysqli_connect_errno()) {
        echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
        exit;
    }
    header('Location: ind.php');
} else {
    $id = $_REQUEST['id'];
    $sqlDelete = "DELETE FROM  tp_user  WHERE id=$id";
    $result = mysqli_query($mysqli, $sqlDelete);
    if (mysqli_connect_errno()) {
        echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
        exit;
    }
    header('Location: ind.php');
}
