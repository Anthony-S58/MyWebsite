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

        <div class="projecttitre"><h3><?php echo $donnees['title'].'</h3><br>'?></div>
        <div class="projectimg">
            <?php
            if( !empty($donnees['image'])){
                ?>
                <img src="uploads/<?=$donnees['image']?>" width="auto" height="auto" alt="">
                <?php
            }else{
                ?>
                <img src="IMG/pasdimage.png" width="auto" height="auto" alt=""> 
                <?php
            };
            ?>
            

        </div>
        <div class="projectdescript"><p><?php echo $donnees['description'].'</p><br>'?></div>
        <h4>Langages utilisés</h4>
        <div id="langages">
            <?php
                if ($donnees['html']=='oui'){
                    echo '<br><img src="IMG/icons/htmlicon.png" alt="" width="30px" height="30px"><br>';
                }else{};
                if ($donnees['css']=='oui'){
                    echo '<br><img src="IMG/icons/cssicon.png" alt="" width="30px" height="30px"><br>';
                }else{};
                if ($donnees['javascript']=='oui'){
                    echo '<br><img src="IMG/icons/jsicon.png" alt="" width="30px" height="30px"><br>';
                }else{};
                if ($donnees['php']=='oui'){
                    echo '<br><img src="IMG/icons/phpicon.png" alt="" width="30px" height="30px"><br>';
                }else{};
                if ($donnees['mysql']=='oui'){
                    echo '<br><img src="IMG/icons/mysqlicon.png" alt="" width="30px" height="30px"><br>';
                }else{};
                if ($donnees['symfony']=='oui'){
                    echo '<br><img src="IMG/icons/symfonyicon.png" alt="" width="30px" height="30px"><br>';
                }else{};
            ?>
        </div>
        <div class="linkproject">
            <a href="<?php echo $donnees['website']?>" target="_blank" title="<?php echo $donnees['website']?>"><button>site web</button></a>
            <a href="<?php echo $donnees['github']?>" target="_blank" title="<?php echo $donnees['github']?>"><button>github</button></a>
        </div>
        <div class="buttonproject">
            <button class="modif">Modifier</button>
            <button class="sup" onclick="return confirm('voulez-vous supprimer ce projet?')"><a href="delete.php?ID=<?php echo $donnees['id']?>">Supprimer</a></button>
        </div>
    </div>
    
<?php
        }
        ?>
</div>

<script src="https://kit.fontawesome.com/508ebce8fc.js"></script>

</body>
</html>