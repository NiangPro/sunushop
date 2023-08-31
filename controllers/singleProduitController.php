<?php
// if(isset($_GET["type"])){
//     if(isset($_SESSION['user'])){
//         if(updateQuantite($_GET["id"],$_SESSION['user']->id, $_GET["type"])){
//            if($_GET["type"]=="add"){
         
//            }
//         }
//     }
 
// }


$p = getProduitPanierByIdProduit($_GET["id"]);


visibilite($_GET["id"]);
$p = getProduitById($_GET["id"]);
// $pe = produitEquivalents($_GET["id"]);
// if(isset($_POST["quantite"])){
//     $quantite = getButtonValue($_POST["quantite"]);
//     if(isset($_POST["moins"])){
//        return $quantite - 1;
//     }else{
//         return $quantite + 1;
//     }
// }

require_once("views/singleProduit.php");