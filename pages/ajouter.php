<?php
require_once 'conection.php';
if (isset($_GET['modifier'])) {
    $btnName = 'Modifier';
    $id = $_GET['modifier'];
    $rec = mysqli_query($con, "SELECT * FROM tp_user WHERE id=$id");
    $modified = mysqli_fetch_array($rec);
    $id = $modified['id'];
    $firstName = $modified['firstName'];
    $lastName = $modified['lastName'];
    $email = $modified['email'];
    $userName = $modified['userName'];
} else {
    $btnName = 'Savegarder';
    $firstName = '';
    $lastName = '';
    $email = '';
    $userName = '';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ajouter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">MySql user Form</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ajouter <span class="sr-only">(current)</span></a>
                    </li>


                </ul>
                <span class="navbar-text">

                    <a class="nav-link" href="logout.php?logout">Log Out</a>

                </span>
            </div>
        </nav>
        <form method="post" action="actions.php">
            <input type="hidden" class="form-control" id="inputEmail3" name="id"
                value="<?=$id; ?>">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" name="prenom"
                        placeholder="Entrer votre prenom"
                        value="<?=$firstName; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" name="nom" placeholder="Entrer votre nom"
                        value="<?=$lastName; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Couriel</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="inputEmail3" name="couriel"
                        placeholder="Entrer votre couriel"
                        value="<?=$email; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" name="username"
                        placeholder="Entrer votre username"
                        value="<?=$userName; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword3" name="password"
                        placeholder="Password">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">

                    <button type="submit" class="btn btn-primary"
                        name="<?=$btnName; ?>"><?=$btnName; ?></button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>