<?php
    session_start();
    require_once('bddconnect.php');
        if(isset($_SESSION['admin'])){
            $user = $_SESSION['admin'];
        }else{
            header('location:connexion.php');
        };
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Administrateur</title>
</head>
<body>
    <a href="disconnect.php">Déconnexion</a>
</body>
</html>