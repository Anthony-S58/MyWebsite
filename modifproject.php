<?php

require_once('bddconnect.php');

if(isset($_SESSION['admin'])){
    $user = $_SESSION['admin'];
}else{

};

?>
<?php

$id=$_GET['id'];


$sql = "SELECT * FROM projets WHERE id = $id";
$query = $bdd->prepare($sql);
$query->execute(); 
$result = $query->fetchAll(PDO::FETCH_ASSOC); 

if ($_POST) {
    if(empty($_FILES['image']['name'])){
    
        $id = strip_tags($_GET['id']);
        $title= strip_tags($_POST ['title']);
        $description = strip_tags($_POST['description']);
        $image = strip_tags($_FILES['image']['name']);
        $html = strip_tags($_POST['html']);
        $css = strip_tags($_POST['css']);
        $javascript = strip_tags($_POST['javascript']);
        $php = strip_tags($_POST['php']);
        $mysql = strip_tags($_POST['mysql']);
        $symfony = strip_tags($_POST['symfony']);
        $website = strip_tags($_POST['website']);
        $github = strip_tags($_POST['github']);
        $front = strip_tags($_POST['front']);
        $back = strip_tags($_POST['back']);
        $jeux = strip_tags($_POST['jeux']);


        $sql = "UPDATE projets SET title=:title, description=:description, html=:html, css=:css, javascript=:javascript, php=:php, mysql=:mysql, symfony=:symfony, website=:website, github=:github, front=:front, back=:back, jeux=:jeux  WHERE id=:id";
        
    $query = $bdd->prepare($sql);

        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':title', $title);
        $query->bindValue(':description', $description);
        // $query->bindValue(':image', $image);
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

        $photo=$image;

        $query->execute();
        header("Location: projects.php");
    }
    else{

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
        

    // update
    $sql = "UPDATE projets SET title=:title, image=:image, description=:description, html=:html, css=:css, javascript=:javascript, php=:php, mysql=:mysql, symfony=:symfony, website=:website, github=:github, front=:front, back=:front, jeux=:jeux WHERE id=:id";

    $query = $bdd->prepare($sql);

        $query->bindValue(':id', $id, PDO::PARAM_INT);
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
        $photo=$image;

        $query->execute();

    header("Location: projects.php");

}else {
    echo 'Veuillez remplir tous les champs';
}}}
// récupération des données du projet
if(isset($_GET['id'])&& !empty($_GET['id'])) {

$id = strip_tags($_GET['id']);  //fonction qui permet d'enlever tous les tags html
// var_dump($id); //verification que l'on récupère bien l'ID

$sql = "SELECT * FROM projets WHERE id=:id";  //requête préparée
$query = $bdd->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT);
$query->execute();

$projet = $query->fetch();
// on verifie si le projet existe
if(!$projet){
    header("Location: index.php");
}
}else {
header("Location: index.php");
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="modifstyle.css">
    <title>Modif Projet</title>
</head>

<body>

    <div class="categories">
        <h2>Modifier un projet</h2>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">

    <div class="photo_annonce"><img src="uploads/<?=$projet['image']?>" alt=""></div>

        <input type="hidden" name="userid" placeholder="userid" value="<?php echo $projet['userid']?>"><br>
        <input type="text" name="title" placeholder="Title" value="<?php echo $projet['title']?>" required><br>
        <input type="file" name="image" placeholder="File"><br><br>
        <textarea type="text" name="description" placeholder="Description" id="describ" value="<?php echo $projet['description']?>"></textarea><br>
        <input type="text" name="html" placeholder="html" value="<?php echo $projet['html']?>"><br>
        <input type="text" name="css" placeholder="css" value="<?php echo $projet['css']?>"><br>
        <input type="text" name="javascript" placeholder="javascript" value="<?php echo $projet['javascript']?>"><br>
        <input type="text" name="php" placeholder="php" value="<?php echo $projet['php']?>"><br>
        <input type="text" name="mysql" placeholder="mysql" value="<?php echo $projet['mysql']?>"><br>
        <input type="text" name="symfony" placeholder="symfony" value="<?php echo $projet['symfony']?>"><br>
        <input type="text" name="website" placeholder="Url site web" id="website" value="<?php echo $projet['website']?>"></input><br>
        <input type="text" name="github" placeholder="Url github" id="github" value="<?php echo $projet['github']?>"></input><br>
        <input type="text" name="front" placeholder="front" value="<?php echo $projet['front']?>"><br>
        <input type="text" name="back" placeholder="back" value="<?php echo $projet['back']?>"><br>
        <input type="text" name="jeux" placeholder="jeux" value="<?php echo $projet['jeux']?>"><br>
        
        <input type="submit" value="Modifier" class="submit" onclick="return confirm('Voulez-vous modifer ce projet?')">


    </form>

    <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
</body>
</html>
