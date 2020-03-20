<?php

require_once 'conection.php';

if (isset($_POST['Savegarder'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $courriel = $_POST['couriel'];
    $userName = $_POST['username'];
    $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

    $ajouterSql = "INSERT INTO tp_user (firstName, lastName, email, userName, userPassword)
    VALUES ('$prenom', '$nom', '$courriel', '$userName', '$password');";

    mysqli_query($con, $ajouterSql);
    if (mysqli_connect_errno()) {
        echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
        exit;
    }
    header('Location: index.php');
}
 if (isset($_POST['Modifier'])) {
     $id = $_POST['id'];
     // echo $id;
     $prenom = $_POST['prenom'];
     $nom = $_POST['nom'];
     $courriel = $_POST['couriel'];
     $userName = $_POST['username'];
     $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);
     /* SINTAXE A REGLERRRR*/
     $ajouterSql = "UPDATE tp_user SET firstName='$prenom',lastName='$nom',email='$courriel',userName='$userName',userPassword='$password' WHERE id=$id";

     mysqli_query($con, $ajouterSql);
     if (mysqli_connect_errno()) {
         echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
         exit;
     }
     header('Location: index.php');
 } if (isset($_GET['supprimer'])) {
     $id = $_GET['supprimer'];

     $sqlDelete = "DELETE FROM  tp_user  WHERE id=$id";
     $result = mysqli_query($con, $sqlDelete);
     if (mysqli_connect_errno()) {
         echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
         exit;
     }
     header('Location: index.php');
 }
