<?php
include('./components/menu.html');
session_start ();

if(isset($_POST['submit']))
{
    require_once('./class/User.class.php');
    require_once('./class/Post.class.php');
    
    $user = new User($_SESSION['id']);

    $param = array ($_POST['contenu'], $_SESSION['id'], $_GET['idTopic']);
    $post = new Post();
    $post->create($param);
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
    <title>Messages</title>
</head>
<body>
    

    <div class="page">
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




        <div class="container">
        <?php
        echo '<form action="posts.php?idTopic='. $_GET['idTopic'].'&id='. $_GET['id'].'" method="post">'
        ?>
            <textarea name="contenu" cols="100" rows="10" placeholder="Contenu de la réponse" required></textarea>
            <input type="submit" name="submit">
        </form>
    </div>
    </div>


</body>
</html>