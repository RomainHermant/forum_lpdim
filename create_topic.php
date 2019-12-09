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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="col-md-5 mx-auto mt-5">
        <div class="card card-body">
            <h3 class="card-title text-center">Créer un topic</h3>
            <form action="create_topic.php?id=<?= $_GET['id'] ?>" method="POST">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" name="titre" placeholder="Titre de ton topic">
                </div>
                <div class="form-group">
                    <label for="contenu">Message</label>
                    <textarea class="form-control" name="contenu" placeholder="Contenu de ton topic" cols="100" rows="10"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block mb-1" value="Poster">
            </form>
        </div>
    </div>
</body>
</html>