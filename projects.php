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

 <?php
     // Récupérer les données
 $reponse = $bdd->query('SELECT * FROM projets');

 ?>



<a href="admin.php">Retour à l'admin</a>
<a href="index.php">Retour au portfolio</a>
<h1>Mes Projets</h1>

<div id="allprojects">
    <?php
while ($donnees = $reponse ->fetch()) {

?>
    <div class="project">

        <div class="projectimg"></div>
        <div class="projecttitre"><h3><?php echo $donnees['title'].'</h3><br>'?></div>
        <div class="projectdescript"><p><?php echo $donnees['description'].'</p><br>'?></div>
        <h4>Langages utilisés</h4>
<?php
        if ($donnees['html']=='oui'){
            echo '<a><i class="fab fa-html5"></i></a>';
        }else{};
?>
        <a href="<?php echo $donnees['website']?>" target="_blank"><button>site web</button></a>
        <a href="<?php echo $donnees['github']?>" target="_blank"><button>github</button></a>
        <div class="buttonproject">
            <button>Modifier</button>
            <button>Supprimer</button>
        </div>
    </div>
    
<?php
        }
        ?>
</div>

<script src="https://kit.fontawesome.com/508ebce8fc.js"></script>

</body>
</html>