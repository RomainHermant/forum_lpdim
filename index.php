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
    <link rel="stylesheet" href="style.css">
    <title>Forum</title>
</head>
<body>

    <div class="page">
        


        <h1>Forum</h1>
        <h2>Les catégories</h2>
        <div class="element">
            <a href="./topics.php?categ=jeux-videos">Jeux vidéos</a>
            <a href="./topics.php?categ=informatique">Informatique</a>
            <a href="./topics.php?categ=smartphones">Smartphones</a>
            <a href="./topics.php?categ=programmation">Programmation</a>
            <a href="./topics.php?categ=entraides">Entraides</a>
        </div>
        
    </div>
    
</body>
<br>
</html>