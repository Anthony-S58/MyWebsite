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
    <link rel="stylesheet" href="projectsstyle.css">
    <title>Tous mes projets</title>
</head>
<body>
<a href="admin.php">Retour à l'admin</a>
<a href="index.php">Retour au portfolio</a>
<h1>Mes Projets</h1>

<div id="allprojects">
    <div class="project">
        <div class="projectimg"></div>
        <div class="buttonproject">
            <button>Modifier</button>
            <button>Supprimer</button>
        </div>
    </div>
    <div class="project">
        <div class="projectimg"></div>
        <div class="buttonproject">
            <button>Modifier</button>
            <button>Supprimer</button>
        </div>
    </div>
</div>

    
</body>
</html>