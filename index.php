<?php
    require_once('bddconnect.php');
?>
<!DOCTYPE html>
<html lang="Fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta description="Site Web  - Portfolio SIMONNEAU Anthony">
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
                <li><a href="#projets" class="linkburger" data-after="Projets">Projets</a></li>
                <!-- <li><a href="#parcours" class="linkburger" data-after="Parcours">Mon Parcours</a></li> -->
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
          <div id="iconportfolio"><a href="#projets" type="button" class="btn">Portfolio</a></div>
        </div>
    </div>
    <div class="social">
      <a href="https://github.com/Anthony-S58" target="_blank"><i class="fab fa-github" title="Github" alt="github"></i></a>
      <a href="https://www.linkedin.com/in/anthony-simonneau-5545b8214/" target="_blank"><i class="fa fa-linkedin" title="Linkedin" alt="linkedin"></i></a>
      <a href="#"><i class="fa fa-slack" title="Slack" alt="slack"></i></a>
      <a href="#"><i class="fab fa-discord" title="Discord" alt="discord"></i></a>
      <a href="#"><i class="fab fa-gitkraken" title="Gitkraken" alt="gitkraken"></i></a>
    </div>
    </section>

    <!-- FIN SECTION NOM ET PRENOM -->

    <!-- A PROPOS -->

    <section id="about">
        <h2>A propos</h2>
        <div id="infos">
          <div class="portrait">
            <img src="IMG/moi2.png" alt="photo anthony simonneau">
          </div>

          <div class="texte">
              <p>
                Passionné d'informatique, de jeux vidéos et de nouvelles technologies,
                j'ai décidé de me consacrer au code en janvier 2021 et faire une reconversion professionnelle à l'Access Code School.
              </p>
              <p>Mon titre en poche, je continue de me perfectionner via divers projets et langages.</p>
              <p>J'ai décidé d'intégrer l'école Microsoft pour être Développeur en Intelligence Artificielle.</p>
          </div>
        </div>
      <!-- MES SKILLS -->
      <div class="skills">
        
        <i class="fab fa-html5" title="Html" alt="html"></i>
        <i class="fab fa-css3-alt" title="Css" alt="css"></i>
        <i class="fab fa-less" title="Less" alt="less"></i>
        <i class="fab fa-sass" title="Sass" alt="sass"></i>
        <i class="fab fa-js" title="Javascript" alt="javascript"></i>
        <i class="fab fa-php" title="Php" alt="php"></i>
        <i class="fab fa-symfony" title="Symfony" alt="symfony"></i>
        <i class="fab fa-python" title="Python" alt="python"></i>
        <i class="fab fa-figma" title="Figma" alt="figma"></i>
      </div>
    </section>

    <!-- FIN SECTION A PROPOS ET MES SKILLS -->



    <!-- MES PROJETS -->

    <section id="projets">
      <h2>Projets</h2>
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
                                <img class="imageview" src="uploads/<?=$donnees['image']?>" width="auto" height="auto" alt="<?=$donnees['title']?>" title="Voir projet <?=$donnees['title']?>">
                            <?php
                            }else{
                                ?>
                                <img class="imageview" src="IMG/pasdimage.png" width="auto" height="auto" alt="<?=$donnees['title']?>" title="Voir projet <?=$donnees['title']?>"> 
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
                                        echo '<br><img src="IMG/icons/htmlicon.png" alt="html icon" width="30px" height="30px" title="HTML"><br>';
                                    }else{};
                                    if ($donnees['css']=='oui'){
                                        echo '<br><img src="IMG/icons/cssicon.png" alt="css icon" width="30px" height="30px" title="CSS"><br>';
                                    }else{};
                                    if ($donnees['javascript']=='oui'){
                                        echo '<br><img src="IMG/icons/jsicon.png" alt="javascript icon" width="30px" height="30px" title="Javascript"><br>';
                                    }else{};
                                    if ($donnees['php']=='oui'){
                                        echo '<br><img src="IMG/icons/phpicon.png" alt="php icon" width="30px" height="30px" title="PHP"><br>';
                                    }else{};
                                    if ($donnees['mysql']=='oui'){
                                        echo '<br><img src="IMG/icons/mysqlicon.png" alt="mysql icon" width="30px" height="30px" title="MySQL"><br>';
                                    }else{};
                                    if ($donnees['symfony']=='oui'){
                                        echo '<br><img src="IMG/icons/symfonyicon.png" alt="symfony icon" width="30px" height="30px" title="Symfony"><br>';
                                    }else{};
                                ?>
                            </div>
                            <div id="projetlinks">
                                <a href="<?php echo $donnees['website']?>" target="_blank" title="<?php echo $donnees['website']?>"><button id="web">Site web</button></a>
                                <a href="<?php echo $donnees['github']?>" target="_blank" title="<?php echo $donnees['github']?>"><button id="git">Github</button></a>
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
                <label for="email"></label>
                <input  class="__forminput" type="email" name="email" id="email" placeholder="Mail" required>
                <label for="nom"></label>
                <input class="__forminput"type="text" name="nom" id="nom" placeholder="Nom" required>
                <label for="message"></label>
                <textarea class="__formtextarea" cols="30" name="message" rows="10" id="message" placeholder="Message"></textarea>
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