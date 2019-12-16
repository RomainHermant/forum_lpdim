<?php
session_start ();
include('./components/menu.php');

if(isset($_POST['submit']))
{
    require_once('./class/User.class.php');
    require_once('./class/Post.class.php');
    
    $user = new User($_SESSION['id']);

    $param = array ($_POST['contenuReponse'], $_SESSION['id'], $_GET['idTopic']);
    $post = new Post();
    $post->create($param);
    header('Location: posts.php?idTopic='.$_GET['idTopic'].'');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Messages</title>
</head>
<body>
    <div class="container">

        <?php
        require('./class/Topic.class.php');
        $topic = new Topic();
        $id = array ($_GET['idTopic']);
        $lesTopics = $topic->getContenuTopic($id);
        while ($row = $lesTopics->fetch()): ?>
            <div class="card mt-5">
                <h4 class="card-header"><?= $row['titreTopic']; ?></h5>
                <div class="card-body">
                    <p class="card-text"><?= $row['contenuTopic']; ?></p>
                </div>
                <div class="card-footer text-muted">Par : <?= $row['lastUserTopic']; ?>
                <div class="float-right">
                <?= $row['lastDateTopic']; ?>
                </div>
                </div>
            </div>
        <?php endwhile; ?>

        <?php
        require('./class/Post.class.php');
        $post = new Post();
        $id = array ($_GET['idTopic']);
        $lesPosts = $post->getAll($id);
        while ($row = $lesPosts->fetch()): ?>
            <div class="card my-3">
                <div class="card-body">
                    <p class="card-text"><?= $row['contenuPost']; ?></p>
                </div>
                <div class="card-footer text-muted">Par : 
                    <?php
                        require_once('./class/User.class.php');
                        $user = new User($row['idUserPost']);
                        echo $user->getPseudo();
                    ?>
                <div class="float-right">
                <?= $row['datePost']; ?>
                </div>
                </div>
            </div>
        <?php endwhile; ?>

        <div class="mx-auto mt-5">
            <div class="card card-body">
                <form action="posts.php?idTopic=<?= $_GET['idTopic'] ?>" method="post">
                    <div class="form-group">
                        <label for="contenu">Message</label>
                        <textarea class="form-control" name="contenuReponse" placeholder="Contenu de ta réponse" cols="100" rows="10"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-block mb-1" value="Répondre">
                </form>
            </div>
        </div>
    </div>


</body>
</html>