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

