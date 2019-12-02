<?php
    include('./components/menu.html');

session_start ();
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
            <table class="table">
                <thead class="thead-light">
                    <tr>
                      <th scope="col">Titre</th>
                      <th scope="col">Dernier message</th>
                      <th scope="col">Nombre de réponses</th>
                      <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                  
                  <?php
                    require('./class/Topic.class.php');
                    $topic = new Topic();
                    $theme = array ($_GET['categ']);
                    $lesTopics = $topic->loadDataByTheme($theme);
                    while ($row = $lesTopics->fetch()) 
                    {
                        echo '<tr>
                                <td>
                                    <a href="./posts.php?idTopic='. $_GET['id'] .'&id='. $row['0'] .'">'. $row['titreTopic'] .'</a>
                                </td>
                                <td>'. $row['lastUserTopic'] .'</td>
                                <td>'. $row['idThemeTopic'] .'</td>
                                <td>'. $row['lastDateTopic'] .'</td>
                              </tr>';
                    }
                    ?>  
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>