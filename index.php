<?php 

session_start();
require_once("models/database.php");
require_once("models/fonctions.php");

if(isset($_SESSION['user'])){
    $pp = getPanierByUser($_SESSION['user']->id);
}
$pv = afficheAllProduitVisite();
$prods = afficheAllProduit();
$cats = afficheAllCategorie();
$paniers = afficheAllPanier();
if(isset($_GET["page"])){
    require_once("partials/entetes.php");
    switch ($_GET["page"]) {
        case 'categorie':
            require_once("controllers/singleCategorieController.php");
            break;
        case 'single':
            require_once("controllers/singleProduitController.php");
            break;
        
        case 'panier':
            require_once("controllers/panierController.php");
            break;
        case 'profil':
            require_once("controllers/profilController.php");
            break;
        case 'recherche':
            require_once("controllers/searchController.php");
            break;
            case 'logout':
                require_once("controllers/logoutController.php");
                break;
        default:     
            require_once("controllers/accueilController.php");
            break;
    }
    require_once("partials/pied.php");
}else if(isset($_GET["admin"])){
    require_once("themes/header.php");

    switch ($_GET["admin"]) {
        case 'home':
            require_once("controllers/homeController.php");
            break;
        case 'categorie':
            require_once("controllers/categorieController.php");
            break;
        case 'produit':
            require_once("controllers/produitController.php");
            break;
        case 'client':
            require_once("controllers/clientController.php");
            break;
        case 'register':
            require_once("controllers/registerController.php");
            break;
        case 'login':
            require_once("controllers/loginController.php");
            break;
        case 'logout':
            require_once("controllers/logoutController.php");
            break;
        default:     
            require_once("controllers/accueilController.php");
            break;
        }
    require_once("themes/footer.php");

}
else{
    require_once("partials/entetes.php");
    require_once("controllers/accueilController.php");
    require_once("partials/pied.php");
}