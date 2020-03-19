<?php

session_start();
require_once 'conection.php';

if (isset($_POST['login'])) {
    if (!empty($_POST['username']) || empty($_POST['password'])) {
        $mdp = 'SELECT userPassword FROM tp_user WHERE userName="'.$_POST['username'].'"';
        $result = mysqli_query($mysqli, $mdp);
        $usager = [];
        while ($listusagers = mysqli_fetch_assoc($result)) {
            array_push($usager, $listusagers);
        }

        mysqli_free_result($result);

<<<<<<< HEAD:testing.php
        mysqli_close($con);

=======
        mysqli_close($mysqli);
        //echo $usager[0]['userPassword'];
>>>>>>> dfea6bcc6f87f9145699d4589182b0cf52ae7cc6:pages/testing.php
        if (!empty($usager)) {
            if (password_verify($_POST['password'], $usager[0]['userPassword'])) {
                $sql = 'SELECT * FROM tp_user WHERE userName="'.$_POST['username'].'"';
                $result = mysqli_query($mysqli, $sql);
                $_SESSION['User'] = $_POST['username'];
                header('location:form.php');
            } else {
                header('location:login.php?Invalid=Mot de passe ou Username est incorrect');
            }
        }
    }
}
