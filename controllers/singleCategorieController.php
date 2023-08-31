<?php
visibilite($_GET["id"]);
$produits = getProduitByIdCategorie(intval($_GET["id"]));
require_once("views/singleCategorie.php");