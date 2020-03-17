<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/b8d07a8a15.js"></script>

    <title>index.php</title>

</head>

<body>
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

$sql = 'SELECT * FROM `tp_user` WHERE userName="admin"';

$result = mysqli_query($mysqli, $sql);

if (!$result) {
    $error = mysqli_error($mysqli);
}

$usager = [];
while ($listusagers = mysqli_fetch_assoc($result)) {
    array_push($usager, $listusagers);
}

mysqli_free_result($result);

mysqli_close($mysqli);

?>
    <div class="container">
        <i class="fas fa-pen-square"></i>

        <ul class="thead-dark">
            <li>MySQL User Form</li>
            <li><a href="form.php">ajouter</a></li>
        </ul>


        <table class="table table-bordered">

            <tr>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Courriel</th>
                <th scope="col">Date de creation</th>
                <th scope="col">Date de modification</th>
                <th scope="col"></th>
            </tr>

            <?php foreach ($usager as $userinfo): ?>
            <tr>

                <td><?=$userinfo['firstName']; ?>
                </td>
                <td><?=$userinfo['lastName']; ?>
                </td>
                <td><?=$userinfo['email']; ?>
                </td>
                <td><?=$userinfo['creationDate']; ?>
                </td>
                <td><?=$userinfo['modificationDate']; ?>
                </td>
                <td><i class="fas fa-pen-square"></i></td>
            </tr>

            <?php endforeach; ?>

        </table>
    </div>

</body>

</html>