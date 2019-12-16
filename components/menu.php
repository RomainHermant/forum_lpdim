<?php
require_once('./class/User.class.php');
$user = new User($_SESSION['id']);
if($user->getAvatar() != null) {
    $avatar = "./membres/avatars/" . $user->getAvatar();
}
else {
    $avatar = "img/user-avatar-defaut.svg";
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="index.php">Le Forum</a>
    <div class="collapse justify-content-between navbar-collapse ml-3" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href='messages.php'>Mes messages</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="mon_compte.php"><img class="rounded-circle" src=<?= $avatar ?> width="40px" height="40px" id="avatar"></a>
            </li>
            <li class="nav-item">
                <a class=nav-link href="deconnexion.php"><img src="./img/logout.svg" width="40px" id="logout"></a>
            </li>
        </ul>
    </div>
</nav>