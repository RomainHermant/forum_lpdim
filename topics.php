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
        <h1>Les topics</h1>
        <a href="create_topic.php?id=6&categ=entraides">+</a>
        <div class="element">
            <?php
                require('./class/Topic.class.php');
                $topic = new Topic();
                $theme = array ($_GET['categ']);
                $lesTopics = $topic->loadDataByTheme($theme);
                while ($row = $lesTopics->fetch()) 
                {
                    echo '<a href="./posts.php?id='. $row['0'] .'">'. $row['titre'] .'</a>';
                }

            ?>
        </div>    
    </div>


</body>
</html>