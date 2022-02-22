<?php

ob_start();

    $email=HTMLSpecialChars($_POST['email']);
    $message=HTMLSpecialChars($_POST['message']);

?>

    <?php

    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('a.simonneau@codeur.online', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);

            if($retour){
            echo '<p>Votre message a été envoyé.</p>';
            header('Refresh: 3; url="index.php"');
            ob_flush();
        }

            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>

