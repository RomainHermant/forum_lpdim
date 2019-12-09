<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
    <div class="col-md-5 mx-auto mt-5">
        <div class="card card-body">
            <h3 class="card-title text-center">Connexion</h3>
            <form action="connexion.php" method="POST">
                <div class="form-group">
                    <label for="pseudo">Pseudonyme</label>
                    <input type="text" class="form-control" name="pseudo" placeholder="Ton pseudo">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password" placeholder="Ton mot de passe">
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-block mb-1" value="Connexion">
                <small class="form-link sign-up">Tu n'es pas encore inscrit ? <u><a href=inscription.php>Fais le vite ici !</a></u></small>
            </form>

            <?php
                if(isset($_POST['pseudo']) && isset($_POST['password']))
                {
                    require('./class/User.class.php');
                    $user = new User();
                    $t = $user->loadData();
                    while ($row = $t->fetch()) 
                    {
                        if (password_verify($_POST['password'], $row['mdpUser']))
                        {
                            session_start();
                            $_SESSION['id'] = $row['idUser'];
                            header('Location: index.php');
                        }
                    }
                    echo '<div class="alert alert-danger mt-3" role="alert">
                            ERREUR - Le pseudo ne correspond pas au mot de passe !
                        </div>';
                }
            ?>
            
        </div>
    </div>
</body>
</html>