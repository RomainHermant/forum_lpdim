<?php
session_start ();
include('./components/menu.php');
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
        <h1 class="text-center mb-3 border border-dark rounded-pill">Mes messages</h1>
        <div class="mt-3">
            <ul class="list-group">
                <?php
                    /*require_once('./class/Discussion.class.php');
                    $discu = new Discussion();
                    $id = array($_SESSION['id']);
                    $lesDiscus = $discu->getAll($id);
                    while ($row = $lesDiscus->fetch()): ?>
                        <li class="list-group-item list-group-item-light">
                            <a href="./topics.php?id=2&categ=jeux-videos">Jeux vidéos</a>
                            <span class="float-right">Par : admin</span>
                        </li>
                    <?php endwhile; 
                */?>
            </ul>
        </div>
    </div>
</body>
</html>