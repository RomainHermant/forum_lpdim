<?php
if(isset($_POST['pseudo']))
{
    require('./class/User.class.php');
    $user = new User();
    $users->loadData();
    foreach($users as $user)
    {
        echo $user;
    }


    //password_verify($_POST['password'], $hash);
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
</head>
<body>
    
</body>
</html>