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
            if(empty($_FILES['image'])){
                $name = ('../IMG/pasdimage.png');
            }

            move_uploaded_file($tmpName, 'uploads/'.$name);
        }
        $title = strip_tags($_POST['title']);
        $image = strip_tags($_FILES['image']['name']);
        $description = strip_tags($_POST['description']);
        $html = ($_POST['html']);
        $css = ($_POST['css']);
        $javascript = ($_POST['javascript']);
        $php = ($_POST['php']);
        $mysql = ($_POST['mysql']);
        $symfony = ($_POST['symfony']);
        $website = strip_tags($_POST['website']);
        $github = strip_tags($_POST['github']);
        $front = ($_POST['front']);
        $back = ($_POST['back']);
        $jeux = ($_POST['jeux']);


        $sql = "INSERT INTO projets(title, image, description, html, css, javascript, php, mysql, symfony, website, github, front, back, jeux) VALUES(:title, :image, :description, :html, :css, :javascript, :php, :mysql, :symfony, :website, :github, :front, :back, :jeux)";
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
        header('Location:projects.php');
        
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ajout Projet</title>
</head>

<body>
    
    <header>
        <a href="admin.php"><h1>Retour à l'admin</h1></a>
    </header>
    
    <div class="categories">
        <h2>Ajouter un projet</h2>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">  
        <input type="text" name="title" placeholder="Title" required><br>
        <input type="file" name="image" placeholder="File"><br><br>
        <textarea type="text" name="description" placeholder="Description" id="describ"></textarea><br>
        <input type="text" name="html" placeholder="html"><br>
        <input type="text" name="css" placeholder="css"><br>
        <input type="text" name="javascript" placeholder="javascript"><br>
        <input type="text" name="php" placeholder="php"><br>
        <input type="text" name="mysql" placeholder="mysql"><br>
        <input type="text" name="symfony" placeholder="symfony"><br>
        <input type="text" name="website" placeholder="Url site web" id="website"></input><br>
        <input type="text" name="github" placeholder="Url github" id="github"></input><br>
        <input type="text" name="front" placeholder="front"><br>
        <input type="text" name="back" placeholder="back"><br>
        <input type="text" name="jeux" placeholder="jeux"><br>
            
        <input type="submit" name="submit" value="Ajouter" class="submit">
        
        
    </form>

</body>
</html>