<?php
require_once 'conection.php';

if (isset($_POST['ajouter']) && $_POST['ajouter'] == 1) {
    $prenom = $_REQUEST['firstname'];
    $nom = $_REQUEST['lastname'];
    $courriel = $_REQUEST['email'];
    $userName = $_REQUEST['username'];
    $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

    $ajouterSql = "INSERT INTO tp_user (firstName, lastName, email, userName, userPassword)
    VALUES ('$prenom', '$nom', '$courriel', '$userName', '$password');";

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

?>


