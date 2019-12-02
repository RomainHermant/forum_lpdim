<?php
    include('./components/menu.html');

session_start ();
//echo $_SESSION['id'];
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
        <h1 class="text-center mb-3 border border-dark rounded-pill">Forum</h1>
        <h2>Les catégories</h2>
        <div class="mt-3">
            <ul class="list-group">
                <li class="list-group-item list-group-item-dark">
                    <a href="./topics.php?id=2&categ=jeux-videos">Jeux vidéos</a>
                </li>
                <li class="list-group-item list-group-item-light">
                    <a href="./topics.php?id=3&categ=informatique">Informatique</a>
                </li>
                <li class="list-group-item list-group-item-dark">
                    <a href="./topics.php?id=4&categ=smartphones">Smartphones</a>
                </li>
                <li class="list-group-item list-group-item-light">
                    <a href="./topics.php?id=5&categ=programmation">Programmation</a>
                </li>
                <li class="list-group-item list-group-item-dark">
                    <a href="./topics.php?id=6&categ=entraides">Entraides</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>