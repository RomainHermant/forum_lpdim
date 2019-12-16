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
    <title>Les topics</title>
</head>
<body>
    <div class="mx-auto p-5" style="width: 75%;">
        <h1 class="text-center mb-3 border border-dark rounded-pill">Forum</h1>
        <h2>Les topics
            <?php
                echo '<a class="badge badge-primary p-1" href="create_topic.php?id='. $_GET['id'] . '&categ=' . $_GET['categ'] .'">+</a>'
            ?>
        </h2>
        
        <div class="mt-3">
            <table class="table text-center">
                <thead class="thead-light">
                    <tr>
                      <th scope="col">Titre</th>
                      <th scope="col">Créateur</th>
                      <th scope="col">Nombre de réponses</th>
                      <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                  
                  <?php
                    require_once('./class/Topic.class.php');
                    require_once('./class/Post.class.php');
                    $topic = new Topic();
                    $theme = array ($_GET['categ']);
                    $lesTopics = $topic->getDataByTheme($theme);

                    while ($row = $lesTopics->fetch()): ?>
                        <tr>
                            <td>
                                <a href="./posts.php?idTopic=<?= $row['idTopic']; ?>"><?= $row['titreTopic']; ?></a>
                            </td>
                            <td><?= $row['lastUserTopic']; ?></td>
                            <td>
                                <?php
                                    $post = new Post();
                                    $lesPosts = $post->getNbPosts(array($row['idTopic']));
                                    $donnees = $lesPosts->fetch();
                                    echo $donnees['NbPosts'];
                                ?>
                            </td>
                            <td><?= $row['lastDateTopic']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>