<?php
if(isset($_POST['nom']))
{
    require('./class/User.class.php');

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $param = array ($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $password);
    $user = new User();
    $user->create($param);
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body>
    <div class="col-md-5 mx-auto mt-5">
        <div class="card card-body">
            <h3 class="card-title text-center">Inscription</h3>
            <form action="inscription.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Ton nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Ton prénom">
                </div>
                <div class="form-group">
                    <label for="utiPseudo">Pseudonyme</label>
                    <input type="text" class="form-control" name="pseudo" placeholder="Ton pseudo">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="Ton adresse e-mail">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password" placeholder="Ton mot de passe">
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block mb-1" value="Inscription">
            </form>
        </div>
    </div>
</body>
</html>