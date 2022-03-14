<?php

ob_start();
// if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])) {

    $name=HTMLSpecialChars($_POST['nom']);
    $mail=HTMLSpecialChars($_POST['email']);
    $message=HTMLSpecialChars($_POST['message']);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactstyle.css">
    <title>Confirmation Mail</title>
</head>
<body>
    
    <?php

    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<h1>Votre email doit comporter un arobase.</h1>';
        else {
            $retour = mail('a.simonneau@codeur.online', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);

            if($retour){
            echo "<h1>Votre message a bien été envoyé !!! Merci.</h1>";
            echo "<h2>Vous allez être redirigé automatiquement vers l'accueil dans <span id=\"chrono\"></span><span id=\"secondes\"></span></h2>";
            header('Refresh: 5; url="index.php"');
            ob_flush();
        }

            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
    <script src="app.js"></script>
</body>
</html>



