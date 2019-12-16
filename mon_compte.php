<?php
session_start ();
include('./components/menu.php');


if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
    $tailleMax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if($_FILES['avatar']['size'] <= $tailleMax) {
       $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
       if(in_array($extensionUpload, $extensionsValides)) {
          $chemin = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;
          $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
          if($resultat) {
            require_once('./class/User.class.php');
                $user = new User();
                $param = array($_SESSION['id'].".".$extensionUpload,$_SESSION['id']);
                $user->updateAvatar($param);
                header('Location: mon_compte.php');
          } else {
            echo "<div class='alert alert-danger mt-3' role='alert'>
            Erreur durant l'importation de votre photo de profil
        </div>";
          }
       } else {
        echo "<div class='alert alert-danger mt-3' role='alert'>
        Votre photo de profil doit être au format jpg, jpeg, gif ou png
        </div>";
       }
    } else {
        echo "<div class='alert alert-danger mt-3' role='alert'>
        Votre photo de profil ne doit pas dépasser 2Mo
        </div>";
    }
 }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Forum</title>
</head>
<body>
    <div class="mx-auto p-5" style="width: 75%;">
        <h1 class="text-center mb-3 border border-dark rounded-pill">Mon compte</h1>
        <form action="mon_compte.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="avatar">Avatar :</label>
                <input type="file" class="form-control" name="avatar">
            </div>
        <input type="submit" name="submit" class="btn btn-primary btn-block mb-1" value="Modifier ton avatar">
    </div>
</body>
</html>