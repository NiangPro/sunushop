<?php
require_once("themes/header.php");


if(isset($_POST["editer"])){
    extract($_POST);
    if(editCategorie($_GET["id"],$nomCategorie)){
        // return header("Location:?page=categorie");
        unset($_GET["type"]);
    }
}

if(isset($_GET["delete"])){
    if(deletecategorie($_GET["delete"])){
        unset($_GET["type"]);
    }
}

if(isset($_POST["ajouter"])){
    extract($_POST);
    if(ajoutCategorie($nomCategorie)){
        unset($_GET["type"]);
    }
}


$categories = afficheAllCategorie();


if(isset($_GET["type"])){
    if(isset($_GET["id"])){
        $categorie = getCategorieById($_GET["id"]);
    }
    require_once("views/ajoutCategorie.php");
}else{
    require_once("views/categorie.php");
}