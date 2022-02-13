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
    <link rel="stylesheet" href="adminstyle.css">
    <title>Espace Administrateur</title>
</head>
<body>
    <section id="admindashboard">
        <h1>Bienvenue <?php echo $user ?></h1>
        <div id="cadredashboard">
            <div id="addproject">
                <div id="add"><i class="fa fa-plus"></i></div>
                <a href="addproject.php">Ajouter un projet</a>
            </div>
            <div id="allprojects">
                <i class="fa fa-gear"></i>
                <a href="projects.php">Voir et gérer les projets</a>
            </div>
            <div id="disconnect">
                <i class="fa fa-door-open"></i>
                <a href="disconnect.php">Déconnexion</a>
            </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
</body>
</html>