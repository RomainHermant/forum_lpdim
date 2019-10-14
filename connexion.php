<?php
if(isset($_POST['nom']))
{
    require('./class/User.class.php');

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $param = array ($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $password);
    $user = new User();
    $user->create($param);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="login.php" method="POST">
        <input type="text" name="pseudo" placeholder="Pseudo" required="required">
        <input type="password" name="password" placeholder="Mot de passe" required="required">
        <input type="submit">
    </form>
    <a href="inscription.php">S'incscrire</a>
</body>
</html>