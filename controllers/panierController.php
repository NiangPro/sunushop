<?php 

$message = "Veuillez-vous ";

if(isset($_SESSION['user'])){
   $pp = getPanierByUser($_SESSION['user']->id);
   
}

if(isset($_GET["id"])){
   if(isset($_SESSION['user']->id)){
      if(ajoutPanier($_SESSION['user']->id,$_GET["id"],1)){
         return header("Location:?page=panier");
      }
   }
}

if(isset($_GET["delete"])){
   if(deletePanier($_GET["delete"])){
      return header("Location:?page=panier");
   }
}

require_once("views/panier.php");


// return header("Location:../dashboard/?page=login");