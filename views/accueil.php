<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-4 ">
            <div class="card " style="width: 100%;">
                <div class="card-header text-black">
                    <h3>Catégories</h3>
                </div>
                <div class="card-body text-black">
                    <ul class="list-group list-group-flush">
                        <?php foreach($cats as $c): ?>
                        <li class="list-group-item btn btn-warning text-left mt-2">
                            <a href="?page=categorie&id=<?=$c->id ?>" class=""
                                style="text-decoration: none;color:black; font-size:17px;"><?= ucfirst($c->nomCategorie); ?></a>
                        </li>
                        <?php endforeach; ?>

                        <!-- <li class="list-group-item btn btn-warning text-left"
                            style="text-decoration: none;color:black; font-size:17px;">
                            <a href="?page=chaussure" class=""
                                style="text-decoration: none;color:black; font-size:17px;">Chaussures</a>
                        </li>
                        <li class="list-group-item btn btn-warning text-left"
                            style="text-decoration: none;color:black; font-size:17px;">
                            <a href="vetements.php" class=""
                                style="text-decoration: none;color:black; font-size:17px;">Chapeaux</a>
                        </li>
                        <li class="list-group-item btn btn-warning text-left"
                            style="text-decoration: none;color:black; font-size:17px;">
                            <a href="vetements.php" class=""
                                style="text-decoration: none;color:black; font-size:17px;">Colles</a>
                        </li>
                        <li class="list-group-item btn btn-warning text-left"
                            style="text-decoration: none;color:black; font-size:17px;">
                            <a href="vetements.php" class=""
                                style="text-decoration: none;color:black; font-size:17px;">Caravates</a>
                        </li>
                        <li class="list-group-item btn btn-warning text-left"
                            style="text-decoration: none;color:black; font-size:17px;">
                            <a href="vetements.php" class=""
                                style="text-decoration: none;color:black; font-size:17px;">Camera</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/mod3.jpg" class="d-block w-100" alt="..."
                            style="width:100%; height:450px;border-radius:15px;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/enfants.jpg" class="d-block w-100 img" alt="..."
                            style="width:100%;height:450px;border-radius:15px;">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/mod2.jpg" class="d-block w-100 img" alt="..."
                            style="width:100%;height:450px;border-radius:15px;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4  pt-2">
            <div class="card mb-5 box-shadow" style="width: 100%;">
                <div class="card-header ">
                    <h5 class="text-black">Les plus visités</h5>
                </div>
                <?php foreach($pv as $p): ?>
                <div class="row mt-3 text-black">
                    <div class="col-md-6">
                        <img src="./images/<?= $p->image ?>" alt="" style="width:200px;height:200px;">
                    </div>
                    <div class="col-md-6">
                        <h6><?= ucfirst($p->nom); ?></h6>
                        <h1><span class="text-warning">*****</span></h1>
                        <?= $p->prix; ?>
                    </div>
                </div>
                <?php endforeach; ?>


            </div>
        </div>
        <div class="col-md-8">
            <img src="assets/mod1.jpg" class="d-block w-100" alt="..."
                style="width:100%; height:450px;border-radius:15px;">

            <div class="card mt-3" style="width: 100%;border-radius:15px;">
                <div class="card-header text-black" style="border-top-left-radius:15px;border-top-right-radius:15px;">
                    <h3>Nos Produits</h3>
                </div>
                <div class="card-body  mb-4 row box-shadow">
                    <?php foreach($produits as $p): ?>
                    <div class="card col-md-4 mt-3 pt-2">
                        <img src="images/<?= $p->image ?>" class="card-img-top " alt="..."
                            style="width: 100%;height:190px;">
                        <div class="card-body text-black">
                            <h5 class="card-title"><?= ucfirst($p->nom); ?></h5>
                            <p class="card-text"><?= ucfirst($p->description); ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="?page=single&id=<?= $p->id ?>" class="btn btn-outline-info">
                                        <i class="fa fa-eye" style="color: #fd7c00;"></i>
                                    </a>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-3">
                                    <a href="?page=panier&id=<?= $p->id; ?>" class="btn btn-outline-info ">
                                        <i class="fa fa-shopping-cart" style="color: #fd7c00;"></i>
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>