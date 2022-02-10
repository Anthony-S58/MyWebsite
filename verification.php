<?php
session_start();

if(isset($_POST['submit'])){

    if(isset($_POST['username']) and !empty($_POST['username'])){
  
         if(isset($_POST['password']) and !empty($_POST['password'])){

            require "bddconnect.php";

            $password = hash('sha256',$_POST['password']);

            $getdata = $bdd->prepare("SELECT username FROM user WHERE username = ? and password = ?");
            $getdata->execute(array($_POST['username'], $password));

            $rows = $getdata->rowCount();
            if($rows==true){
                $_SESSION['admin'] = $_POST['username'];
                header("Location:admin.php");
            }else{
                $erreur = "Pseudo ou mot de passe inconnu";
            }

        }else{
            $erreur = "Pseudo ou mot de passe inconnu";
        }

        }else{
            $erreur = "Veuillez saisir votre mot de passe";
        }

        }else{
            $erreur = "Veuillez saisir un pseudo valide";
}    

