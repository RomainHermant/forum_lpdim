<?php
if(isset($_POST['pseudo']))
{
    require('./class/User.class.php');
    $user = new User();
    $t = $user->loadData();
    while ($row = $t->fetch()) 
    {
        if (password_verify($_POST['password'], $row['mdp']))
        {
            session_start();
            $_SESSION['id'] = $row['id'];
            header('Location: index.php');
        }
        else
        {
            echo "Erreur";
        }
    }
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
    <div class="container">
        <h1>Connexion</h1>
        <form action="connexion.php" method="POST">
        <input type="text" name="pseudo" placeholder="Pseudo" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="submit">
        </form>
        <a href="inscription.php">S'incscrire</a>
    </div>
</body>
</html>