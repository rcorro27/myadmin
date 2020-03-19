<?php

session_start();
require_once 'conection.php';

if (isset($_POST['login'])) {
    if (!empty($_POST['username']) || empty($_POST['password'])) {
        $mdp = 'SELECT userPassword FROM tp_user WHERE userName="'.$_POST['username'].'"';
        $result = mysqli_query($con, $mdp);
        $usager = [];
        while ($listusagers = mysqli_fetch_assoc($result)) {
            array_push($usager, $listusagers);
        }

        mysqli_free_result($result);

        mysqli_close($con);

        if (!empty($usager)) {
            if (password_verify($_POST['password'], $usager[0]['userPassword'])) {
                $sql = 'SELECT * FROM tp_user WHERE userName="'.$_POST['username'].'"';
                $result = mysqli_query($con, $sql);
                $_SESSION['User'] = $_POST['username'];
                header('location:form.php');
            } else {
                header('location:login.php?Invalid=Mot de passe ou Username est incorrect');
            }
        }
    }
}
