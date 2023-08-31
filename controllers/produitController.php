<?php
require_once("themes/header.php");
$categories = afficheAllCategorie();
// if(isset($_POST["ajouter"])){
//     extract($_POST);
//     if(ajoutCategorie($nomCategorie)){
//         return header("Location:?page=categorie");
//     }
// }

if(isset($_POST["editer"])){
    extract($_POST);
    $tmp = $_FILES["image"]["tmp_name"];
    if ($tmp) {
        $name = time() . ".jpg";
        move_uploaded_file($tmp, "./images/".$name);
    } else {
        $name = $ancien;
    }

if(editProduit($_GET["id"],$nom,$prix,$description,$qStock,$idcategorie,$name)){
    // return header("Location:?page=categorie");
    unset($_GET["type"]);
}
   
}

if(isset($_GET["delete"])){
    if(deleteProduit($_GET["delete"])){
        unset($_GET["type"]);
    }
}

if(isset($_POST["ajouter"])){
    extract($_POST);
    $tmp = $_FILES["image"]["tmp_name"];
    $name = time().".jpg";
    if (!is_dir("./images")) {
        mkdir("./images");
    }
    move_uploaded_file($tmp,"./images/".$name);
    if(ajoutProduit($nom,$prix,$description,$qStock,$idcategorie,$name)){ 
       
        unset($_GET["type"]);
    }
}

$produits = afficheAllProduit();


if(isset($_GET["type"])){
    if(isset($_GET["id"])){
        $produit = getProduitById($_GET["id"]);
        
    }
    require_once("views/ajoutProduit.php");
}else{
    require_once("views/produit.php");
}