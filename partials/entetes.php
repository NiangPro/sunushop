<?php $paniers = afficheAllPanier(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="?page=header">SUNU<span class="text-warning">SHOP</span></a>
        <!-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse align-center" id="collapsibleNavId">

            <form class="form-inline my-2 my-lg-0 m-auto" method="post">
                <input class="form-control mr-sm-2" name="nom" type="search" placeholder="Rechercher">
                <button type="submit" name="recherche"
                    class="btn btn-outline-light bg-dark my-2 my-sm-0">Rechercher</button>
            </form>

            <div class="mr-3">
                <a href="?page=panier"><i class="fa fa-shopping-cart" style="color: white;"></i></a>
            </div>
            <div class="text-white">
                <?php if(isset($_SESSION['user'])): ?>
                <?= count($pp); ?>
                <?php endif; ?>
            </div>

            <div class="nav-profile-text mr-3 ">
                <a class="btn btn-outline-white text-white " type="button" href="?page=profil"><i
                        class="fa fa-solid fa-user p-2" style="color: black;background:white; border-radius:50%"></i>
                    <?= isset($_SESSION["user"]) ? $_SESSION["user"]->prenom : ""  ?></a>
            </div>


        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-1">
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav m-auto mt-2 mt-lg-1 ">
                <li class="nav-item active">
                    <a class="nav-link" href="?page=header">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <?php foreach($cats as $c): ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=categorie&id=<?= $c->id ?>"><?= ucfirst($c->nomCategorie) ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>