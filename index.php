<?php
    require_once('bddconnect.php');
?>
     <?php

ob_start();

// $email=HTMLSpecialChars($_POST['email']);
// $message=HTMLSpecialChars($_POST['message']);

if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour = mail('a.simonneau@codeur.online', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);

        if($retour){
        echo '<p>Votre message a été envoyé.</p>';
        // header('Refresh: 3; url="index.php"');
        ob_flush();
    }

        else
            echo '<p>Erreur.</p>';
    }
}
?>

<?php
     // Récupérer les données
 $reponse = $bdd->query('SELECT * FROM projets');

 ?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Anthony SIMONNEAU - Développeur Web</title>
</head>
<body>
    <section id=presentation>
    <nav>
        <span id="logo">Anthony SIMONNEAU</span>
        <hr>
        <div id="navigation">
            <ul>
                <li href="#" class="selected">A Propos</li>
                <li><a href="#">Mes Réalisations</a></li>
                <li><a href="#">Mes Passions</a></li>
                <li><a href="#">Me contacter</a></li>
            </ul>
        </div>
    </nav>
    <div id="cadrepresentation">
        <div id="intro">
            <h2>Bonjour, je suis</h2>
            <h1>Anthony SIMONNEAU</h1>
            <h2>Développeur Web et mobile</h2>
            <div id="photo"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique rerum vel odit voluptas fugit beatae optio dolores quae adipisci eos, perferendis iste unde sint facere! Voluptatum in molestiae modi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique rerum vel odit voluptas fugit beatae optio dolores quae adipisci eos, perferendis iste unde sint facere! Voluptatum in molestiae modi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique rerum vel odit voluptas fugit beatae optio dolores quae adipisci eos, perferendis iste unde sint facere! Voluptatum in molestiae modi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique rerum vel odit voluptas fugit beatae optio dolores quae adipisci eos, perferendis iste unde sint facere! Voluptatum in molestiae modi?</p>
        </div>
        <div id="fullstack">
            <div id="containerfrontback">
                <div id="front">
                    <div id="textfront">
                        <h4>Front End</h4>
                    </div>
                    <div class="cadrelangages">
                        <div id="html"><i class="fab fa-html5"></i></div>
                        <div id="css"><i class="fab fa-css3-alt"></i></div>
                        <div id="javascript"><i class="fab fa-js"></i></div>
                    </div>
                </div>
                <div id="back">
                    <div id="textback">
                        <h4>Back End</h4>
                    </div>
                    <div class="cadrelangages">
                        <div id="php"><i class="fab fa-php"></i></div>
                        <div id="symfony"><i class="fab fa-symfony"></i></div>
                    </div>
                </div>
                <div id="tools">
                    <div id="texttools">
                        <h4>Outils Utilisés</h4>
                    </div>
                    <div class="cadrelangages">
                        
                    </div>
                </div>
        </div>
        <div id="social">
            <a href="https://github.com/Anthony-S58" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/anthony-simonneau-5545b8214/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    </section>
    <section id="realisations">
    <?php
        // Récupérer les données
        $reponse = $bdd->query('SELECT * FROM projets');
    ?>
        <h2>Réalisations</h2>
        <div id="cadreprojets">
        <?php
            while ($donnees = $reponse ->fetch()) {
        ?>      
            <div id="projet">
                <div id="projetimage">
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
                <div id="projettexte">
                    <div id="projettitre">
                        <h3><?php echo $donnees['title'].'</h3><br>'?></h3>
                    </div>
                    <div id="projetdescription">
                        <p><?php echo $donnees['description'].'</p><br>'?></p>
                    </div>
                    <div id="projetlanguage">
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
                    <div id="projetlinks">
                        <a href="<?php echo $donnees['website']?>" target="_blank" title="<?php echo $donnees['website']?>"><button>site web</button></a>
                        <a href="<?php echo $donnees['github']?>" target="_blank" title="<?php echo $donnees['github']?>"><button>github</button></a>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </section>
    <section id="passion">

    </section>
    <section id="contact">
        <div id="contactcontainer">
            <form action="" method="POST">
                <input  class="__forminput" type="email" name="email" placeholder="" required>
                <label for="email" id="email">Mail</label>
                <textarea class="__formtextarea" cols="30" name="message" rows="10" placeholder=""></textarea>
                <label for="message" id="textarea">Message</label>
                <button type="submit">Envoyer</button>
            </form>


        </div>
       

        <footer>
            
        </footer>
    </section>

    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
    <script src="app.js"></script>
</body>
</html>