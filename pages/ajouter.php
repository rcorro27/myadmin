<?php
require_once 'conection.php';
$valueInfo = null;
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sqlupdate = "SELECT * from tp_user WHERE email like '$id'";
    $result = mysqli_query($mysqli, $sqlupdate);
    if (mysqli_connect_errno()) {
        echo 'Erreur de connection au serveur MySQL: ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
        exit;
    }
    $valueInfo = mysqli_fetch_assoc($result);
}
echo var_dump($valueInfo);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ajouter</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">

        <div>
            <h1>ajouter</h1>
            <form name="formulaire" method="post" action="actions.php">
                <input type="hidden"
                    name="<?php echo (!empty($valueInfo)) ? 'modifier' : 'ajouter'; ?>"
                    value="<?php echo (!empty($valueInfo)) ? '2' : '1'; ?>" />
                <p> Prenom <input type="text" name="firstname"
                        value="<?php echo (isset($valueInfo['firstName'])) ? $valueInfo['firstName'] : ''; ?>"
                        placeholder=" Prenom" required />
                </p>
                <p> Nom <input type="text" name="lastname"
                        value="<?php echo (isset($valueInfo['lastName'])) ? $valueInfo['lastName'] : ''; ?>"
                        placeholder="Nom" required />
                </p>
                <p> Courriel <input type="email" name="email"
                        value="<?php echo (isset($valueInfo['email'])) ? $valueInfo['email'] : ''; ?>"
                        placeholder="Courriel" required /></p>
                <p> UserName <input type="text" name="username"
                        value="<?php echo (isset($valueInfo['userName'])) ? $valueInfo['userName'] : ''; ?>"
                        placeholder="Username" required /></p>
                <p> Password <input type="text" name="password"
                        value="<?php echo (isset($valueInfo['password'])) ? $valueInfo['password'] : ''; ?>"
                        placeholder="Password" required /></p>
                <p><input name="submit" type="submit" value="Submit" /></p>
            </form>
        </div>
    </div>
</body>

</html>