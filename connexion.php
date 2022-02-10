<?php
include_once 'verification.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Connexion</title>
</head>

<body>

    <form method="POST">
        <input type="text" name="username" placeholder="Pseudo">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="Se connecter" name="submit" class="submit">
        <div class="message2">
            <?php if(isset($erreur)){echo $erreur;}?>
        </div>
    </form>
    
</body>
</html>