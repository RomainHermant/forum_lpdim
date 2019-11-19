<?php
include('./components/menu.html');
session_start ();

if(isset($_POST['submit']))
{
    require_once('./class/User.class.php');
    require_once('./class/Topic.class.php');
    
    $user = new User($_SESSION['id']);

    $param = array ($_POST['titre'], $_POST['contenu'], $user->getPseudo(), $_GET['id']);
    $topic = new Topic();
    $topic->create($param);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="create_topic.php?id=6&categ=entraides" method="post">
            <input type="text" name="titre" placeholder="Titre du topic" required>
            <textarea name="contenu" cols="100" rows="30" placeholder="Contenu du topic" required></textarea>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>