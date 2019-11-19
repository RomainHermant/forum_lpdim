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
    <title>Messages</title>
</head>
<body>
    

    <div class="page">
        <h1>Les topics</h1>
        <div class="element">
            <?php
                require('./class/Post.class.php');
                $post = new Post();
                $id = array ($_GET['id']);
                $lesPosts = $post->loadDataByIdTopic($id);
                while ($row = $lesPosts->fetch()) 
                {
                    echo $row['contenu'];
                }

            ?>
        </div>    
    </div>


</body>
</html>