<?php   
    require_once('bddconnect.php');

    if ($_POST) {
        $username = strip_tags($_POST['username']);      
        $mail = strip_tags($_POST ['mail']);
        $password = strip_tags($_POST ['password']);
       
            if(isset($_POST['username']) && !empty($_POST['username'])
            && isset($_POST['mail']) && !empty($_POST['mail'])
            && isset($_POST['password']) && !empty($_POST['password'])){
            
                $password = hash('sha256', $password);
                
                $sql = "INSERT INTO user(username, mail, password) VALUES  (:username,:mail, :password)";
                $query = $bdd->prepare($sql);
                $query->bindValue(':username', $username);
                $query->bindValue(':mail', $mail);
                $query->bindValue(':password', $password);
                $query->execute();
            }
        header('location:connexion.php');
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <div class="categories">
        <h2>Inscription</h2>
    </div>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="Pseudo">
        <input type="text" name="mail" placeholder="Adresse mail">
        <input type="password" name="password" placeholder="Mot de passe" id="password">
        <input type="submit" value="S'inscrire" class="submit">
    </form>
</body>
</html>