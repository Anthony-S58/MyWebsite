<?php
    session_start();
    require_once('bddconnect.php');
        if(isset($_SESSION['admin'])){
            $user = $_SESSION['admin'];
        }else{
            header('location:connexion.php');
        };

    if ($_POST) {

    if(isset($_POST['title']) && !empty($_POST['title'])  
    && isset($_POST['description']) && !empty($_POST['description'])
    && isset($_POST['html']) 
    && isset($_POST['css'])
    && isset($_POST['javascript'])
    && isset($_POST['php']) 
    && isset($_POST['mysql'])
    && isset($_POST['symfony'])
    && isset($_POST['website']) && !empty($_POST['website'])
    && isset($_POST['github']) && !empty($_POST['github'])
    && isset($_POST['front'])
    && isset($_POST['back'])
    && isset($_POST['jeux'])){
    
    if(isset($_FILES['image'])){
            $tmpName = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name'];
            if(empty($name)){
                $name = ('uploads/pasdimage.png');
            }

            move_uploaded_file($tmpName, 'IMG/'.$name);
        }
        $title = strip_tags($_POST['title']);
        $description = strip_tags($_POST['description']);
        $html = ($_POST['html']);
        $css = ($_POST['css']);
        $javascript = ($_POST['javascript']);
        $php = ($_POST['php']);
        $mysql = ($_POST['mysql']);
        $symfony = ($_POST['symfony']);
        $website = strip_tags($_POST['website']);
        $github = ($_POST['github']);
        $front = ($_POST['front']);
        $back = ($_POST['back']);
        $jeux = ($_POST['jeux']);
        $image = strip_tags($_FILES['image']['name']);


        $sql = "INSERT INTO projets(id, title, image, description, html, css, javascript, php, mysql, symfony, website, github, front, back, jeux) VALUES ( ,:title, :image, :description, :html, :css, :javascript, :php, :mysql, :symfony, :website, :github, :front, :back, :jeux)";
        $query = $bdd->prepare($sql);
        
        $query->bindValue(':title', $title);
        $query->bindValue(':image', $image);
        $query->bindValue(':description', $description);
        $query->bindValue(':html', $html);
        $query->bindValue(':css', $css);
        $query->bindValue(':javascript', $javascript);
        $query->bindValue(':php', $php);
        $query->bindValue(':mysql', $mysql);
        $query->bindValue(':symfony', $symfony);
        $query->bindValue(':website', $website);
        $query->bindValue(':github', $github);
        $query->bindValue(':front', $front);
        $query->bindValue(':back', $back);
        $query->bindValue(':jeux', $jeux);
        
        $query->execute();
        header('Location:admin.php');
        
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/connect.css">
    <title>Portfolio - Ajout Projet</title>
</head>

<body>
    
    <header>
        <a href="admin.php"><h1>Retour à l'admin</h1></a>
    </header>
    
    <div class="categories">
        <h2>Ajouter un projet</h2>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">  
        <input type="hidden" name="id">      
        <input type="text" name="title" placeholder="title" required><br>
        <input type="file" name="image" placeholder="file"><br><br>
        <textarea type="text" name="description" placeholder="description" id="describ"></textarea><br>
        <div>
            <label>HTML :</label>
            <label><input name="html" type="radio" checked value="oui">oui</label>
            <label><input name="html" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="html"><label for="html">html</label> -->
        <div>
            <label>CSS :</label>
            <label><input name="css" type="radio" checked value="oui">oui</label>
            <label><input name="css" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="css"><label for="css">css</label> -->
        <div>
            <label>Javascript :</label>
            <label><input javascript="Afficher" type="radio" checked value="oui">oui</label>
            <label><input javascript="Afficher" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="javascript"><label for="javascript">javascript</label> -->
        <div>
            <label>PHP :</label>
            <label><input name="php" type="radio" checked value="oui">oui</label>
            <label><input name="php" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="php"><label for="php">php</label> -->
        <div>
            <label>MYSQL :</label>
            <label><input name="mysql" type="radio" checked value="oui">oui</label>
            <label><input name="mysql" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="mysql"><label for="mysql">mysql</label> -->
        <div>
            <label>Symfony :</label>
            <label><input name="symfony" type="radio" checked value="oui">oui</label>
            <label><input name="symfony" type="radio" value="non">non</label>
        </div>
        <input type="text" name="website" placeholder="url site web" id="website"></textarea><br>
        <input type="text" name="github" placeholder="url github" id="github"></textarea><br>
        <!-- <input type="radio" name="symfony"><label for="symfony">symfony</label> -->
        <div>
            <label>Front :</label>
            <label><input name="front" type="radio" checked value="oui">oui</label>
            <label><input name="front" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="front"><label for="front">front</label> -->
        <div>
            <label>Back :</label>
            <label><input name="back" type="radio" checked value="oui">oui</label>
            <label><input name="back" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="back"><label for="back">back</label> -->
        <div>
            <label>Jeux :</label>
            <label><input name="jeux" type="radio" checked value="oui">oui</label>
            <label><input name="jeux" type="radio" value="non">non</label>
        </div>
        <!-- <input type="radio" name="jeux"><label for="jeux">jeux</label> -->
            
        <input type="submit" name="submit"value="Ajouter" class="submit">
        
        
    </form>

</body>
</html>