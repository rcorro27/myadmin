<?php
include_once 'actions.php';
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
                <input type="hidden" name="ajouter" value="1" />
                <p> Prenom <input type="text" name="firstname" placeholder="Enter Name" required
                        value="<?php (isset($valueInfo['firstName'])) ? $valueInfo['firstName'] : ' '; ?>" />
                </p>
                <p> Nom <input type="text" name="lastname" placeholder="Enter lastname" required /></p>
                <p> Courriel <input type="email" name="email" placeholder="Enter email" required /></p>
                <p> UserName <input type="text" name="username" placeholder="Enter username" required /></p>
                <p> Password <input type="text" name="password" placeholder="Enter password" required /></p>
                <p><input name="submit" type="submit" value="Submit" /></p>
            </form>
        </div>
    </div>
</body>

</html>