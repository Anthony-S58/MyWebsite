<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
</head>

<body>
        <!-- On commence par se connecter à la base de données -->
    
    <?php

        include('bddconnect.php');
        // ajout d'un script d'alert js pour confirmer la suppression
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Projet supprimé');
            window.location.href='projects.php';
            </script>");

    ?>
    <?php
        // On récupère l'ID présente dans l'HTML
        $getid=$_GET['ID'];
        //  On exécute la requête pour supprimer
        $bdd->exec ("DELETE FROM projets WHERE ID='$getid'");

    ?>
