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
        <div class="element">
            <?php
                require('./class/Topic.class.php');
                $topic = new Topic();
                $lesTopics = $topic->loadData();
                while ($row = $lesTopics->fetch()) 
                {
                    echo '<a href="./posts">'. $row['titre'] .'</a>';

                    
                }



            ?>
        </div>    
    </div>


</body>
</html>