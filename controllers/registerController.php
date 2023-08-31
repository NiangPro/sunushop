<?php

$message = "";
if(isset($_POST["register"])){
    extract($_POST);
   if(!empty($prenom) && !empty($nom) && !empty($email) && !empty($adresse) && !empty($tel) && !empty($mdp) ){
    if(ajoutUser($prenom,$nom,$tel,$adresse,$email,$mdp)){
        return header("location:?admin=login");
    }
   }else{ 
    saveInputData();
    $message = "Veuillez remplir tous les champs";
}
}


require_once("views/register.php");