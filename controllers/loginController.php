<?php

$message = "";


if(isset($_POST["connecter"])){
    extract($_POST);
    $user = login($email,$mdp);
   if(pasVide([$email,$mdp])){
    if($user){
        $_SESSION['user'] = $user;//utilisateur connecte 
    //    redirection vers le site ou bien vers le tableau de bord
     if($user->role == "admin"){
        return header("Location:?admin=home");
     }else{
        return header("Location:index.php");
     }

    }
    else{
        saveInputData();
        $message = "email ou mot de passe incorrect";
    
    }
   }
}

require_once("views/login.php");