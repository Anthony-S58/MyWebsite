<?php
    require_once('bddconnect.php');
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
        <div id="cadrerealisations">
            <h1 id="titrerealisations">Réalisations</h1>
            <div id="projetscontainer">
                <div id="links">
                    <ul>
                        <li>Tous mes projets</li>
                        <li>Front-End</li>
                        <li>Back-End</li>
                    </ul>
                </div>
                <div id="projets">
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>
                    <div class="projet"></div>

                </div>
            </div>

        </div>
    </section>

    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
    <script src="app.js"></script>
</body>
</html>