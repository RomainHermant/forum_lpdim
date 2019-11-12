<?php
    include('./components/menu.html');

session_start ();
echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Les topics</title>
</head>
<body>
    

    <div class="page">
        <h1>Les posts</h1>
        <div class="element">
            <?php
                <a href="./topics.php">Jeux vidéos</a>
                <a href="./topics.php">Informatique</a>
                <a href="./topics.php">Smartphones</a>
                <a href="./topics.php">Programmation</a>
                <a href="./topics.php">Entraides</a>

            ?>
        </div>    
    </div>


</body>
</html>