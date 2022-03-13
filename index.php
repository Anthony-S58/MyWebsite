<?php
    require_once('bddconnect.php');
?>
<!DOCTYPE html>
<html lang="Fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>MON PORTFOLIO</title>
  </head>

  <body>
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
              <a href="#name"><h1><span>A</span>nthony <span>S</span>imonneau</h1></a>
          </div>
          <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
              <ul>
                <li><a href="#about"  class="linkburger" data-after="A Propos">A Propos</a></li>
                <li><a href="#projets" class="linkburger" data-after="Projets">Mes Projets</a></li>
                <li><a href="#parcours" class="linkburger" data-after="Parcours">Mon Parcours</a></li>
                <li><a href="#contact" class="linkburger" data-after="Contact">Contact</a></li>

              </ul>
          </div>
        </div>
      </div>

    </section>

    <!-- SECTION NOM ET PRENOM -->

    <section id="name">
      <div class="container">
        <div>
          <h1>Bonjour,</h1>
          <h1>Je suis</h1>
          <h1 class="typing">Anthony SIMONNEAU</h1>
          <br />
          <h2>Développeur web et web mobile</h2>
          <br />
          <div id="iconportfolio"><a href="#projet" type="button" class="btn">Portfolio</a></div>
        </div>
    </div>
    <div class="social">
      <a href="https://github.com/Anthony-S58" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://www.linkedin.com/in/anthony-simonneau-5545b8214/" target="_blank"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-slack"></i></a>
      <a href="#"><i class="fab fa-discord"></i></a>
      <a href="#"><i class="fab fa-gitkraken"></i></a>
    </div>
    </section>

    <!-- FIN SECTION NOM ET PRENOM -->

    <!-- A PROPOS -->

    <section id="about">
        <h2>A propos</h2>
      <div class="portrait">
        <img
          src="IMG/portrait.jpg"
          alt="image portrait"
          height="450px"
          width="350px"
        />
      </div>

      <div class="texte">

        <p>
           En formation à l'Acces Code School de Nevers(58) depuis Mars 2021.
          Profil tertiaire et polyvalent, j'ai travaillé dans beaucoup de domaines.<br>
        </p>

        <p>
         Fan d'informatique, de jeux vidéos et de nouvelles technologies.<br><br>
          J'ai décidé de me consacrer au code en janvier 2021 et je découvre chaque jour, un vaste univers qui me passionne de plus en plus...
        </p>
      </div>
      <div class="skills">
        
        <i class="fab fa-html5" title="Html"></i>
        <i class="fab fa-css3-alt" title="Css"></i>
        <i class="fab fa-less" title="Less"></i>
        <i class="fab fa-sass" title="Sass"></i>
        <i class="fab fa-js" title="Javascript"></i>
        <i class="fab fa-php" title="Php"></i>
        <i class="fab fa-symfony" title="Symfony"></i>
        <i class="fab fa-python" title="Python"></i>
        <i class="fab fa-figma" title="Figma"></i>
      </div>
    </section>

    <!-- MES SKILLS -->


    <!-- FIN SECTION A PROPOS ET MES SKILLS -->

    <!-- MES PROJETS -->

    <section id="projets">
      <h2>Mes Projets</h2>
      <?php
      $reponse = $bdd->query('SELECT * FROM projets ORDER BY id DESC');
      ?>
                <div id="projet">
      <?php
            while ($donnees = $reponse ->fetch()) {
        ?>
                                
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <?php
                            if( !empty($donnees['image'])){
                            ?>
                                <img class="imageview" src="uploads/<?=$donnees['image']?>" width="auto" height="auto" alt="" title="Voir projet <?=$donnees['title']?>">
                            <?php
                            }else{
                                ?>
                                <img class="imageview" src="IMG/pasdimage.png" width="auto" height="auto" alt="" title="Voir projet <?=$donnees['title']?>"> 
                            <?php
                            };
                            ?>
                        </div>         
                        <div class="flip-box-back">
                            <div id="projettitle">
                                <h3><?php echo $donnees['title'].'</h3><br>'?><br>
                            </div>
                            <div id="projetdescription">
                                <p><?php echo $donnees['description']?></p><br>
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
                                <a href="<?php echo $donnees['website']?>" target="_blank" title="<?php echo $donnees['website']?>"><button id="web">site web</button></a>
                                <a href="<?php echo $donnees['github']?>" target="_blank" title="<?php echo $donnees['github']?>"><button id="git">github</button></a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
        }
        ?>
        </div>  
    </section>

    <!-- FIN SECTION PROJETS -->

    <!-- CONTACT -->
    
    <section id="contact">
        
        <div id="contacttitle"><h3 >Contact</h3></div>
        <div id="contactcontainer">
            <form action="contact.php" method="POST">
                <input  class="__forminput" type="email" name="email" placeholder="" required>
                <label for="email" id="email">Mail</label>
                <input class="__forminput"type="text" name="nom" placeholder="" required>
                <label for="nom" id="nom">Nom</label>
                <textarea class="__formtextarea" cols="30" name="message" rows="10" placeholder=""></textarea>
                <label for="message" id="textarea">Message</label>
                <button type="submit" onload="timer()">Envoyer</button>
            </form>
        </div>

    </section>
    <section id="end">
        <footer>
            <p>Copyright &copy; 2022 Anthony SIMONNEAU. All Rights Reserved</p>
        </footer>
    </section>

    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
    <script src="app.js"></script>
</body>
</html>