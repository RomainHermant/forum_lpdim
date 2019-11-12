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
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="inscription.php" method="POST">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="pseudo" placeholder="Pseudo">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</body>
</html>