<?php if(isset($_SESSION["user"])): ?>
<div class="container-fluid  mt-4 ml-5">
    <div class="row">
        <div class="col-md-7 card ml-4" style="height: 550px;">
            <div class="card-header row">
                <div class="col-md-8">
                    <h2>Informations compte</h2>
                </div>
                <div class="col-md-4 text-right">
                    <a href="?page=logout" class="btn btn-warning ">Deconnecter</a>
                </div>
            </div>
            <div class="card-body">
                <h4><label for="" class="mr-5">Prenom:</label><?= ucfirst($_SESSION["user"]->prenom); ?></h4>

                <h4><label for="" class="mr-5">Nom:</label><?= ucfirst($_SESSION["user"]->nom); ?></h4>

                <h4><label for="" class="mr-5">Telephone:</label><?= $_SESSION["user"]->tel; ?></h4>

                <h4><label for="" class="mr-5">Adresse:</label><?= ucfirst($_SESSION["user"]->adresse); ?></h4>

                <h4><label for="" class="mr-5">Email:</label><?= $_SESSION["user"]->email; ?></h4>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card " style="width: 100%;">
                <div class="card-header text-black">
                    <h3>Catégories</h3>
                </div>
                <div class="card-body text-black">
                    <ul class="list-group list-group-flush">
                        <?php foreach($cats as $c): ?>
                        <li class="list-group-item btn btn-warning text-left mt-2">
                            <a href="?page=categorie&id=<?=$c->id ?>" class=""
                                style="text-decoration: none;color:black; font-size:17px;"><?= $c->nomCategorie; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header card mt-2 ">
                    <h5 class="text-black">Les plus visités</h5>
                </div>
                <?php foreach($pv as $p): ?>
                <div class="row mt-3 text-black">
                    <div class="col-md-6 pl-5">
                        <img src="./images/<?= $p->image ?>" alt="" style="width:200px;height:200px;">
                    </div>
                    <div class="col-md-6 pl-5">
                        <h6><?= $p->nom; ?></h6>
                        <h1><span class="text-warning">*****</span></h1>
                        <?= $p->nom; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="row mt-2 text-black">
                    <div class="col-md-6">
                        <img src="assets/caravate.jpg" class="d-block w-100 p-1" alt="..."
                            style="width:100%; height:150px;">
                    </div>
                    <div class="col-md-6">
                        <h6>Chemise couleur</h6>
                        <h1><span class="text-warning">*****</span></h1>
                        8000
                    </div>
                </div>
                <div class="row mt-2 text-black">
                    <div class="col-md-6">
                        <img src="assets/chemise7.jpg" class="d-block w-100 p-1" alt="..."
                            style="width:100%; height:150px;">
                    </div>
                    <div class="col-md-6">
                        <h6>Chemise couleur</h6>
                        <h1><span class="text-warning">*****</span></h1>
                        8000
                    </div>
                </div>
                <div class="row mt-2 text-black">
                    <div class="col-md-6">
                        <img src="assets/chemise8.jpg" class="d-block w-100 p-1" alt="..."
                            style="width:100%; height:150px;">
                    </div>
                    <div class="col-md-6">
                        <h6>Chemise couleur</h6>
                        <h1><span class="text-warning">*****</span></h1>
                        8000
                    </div>
                </div>
                <div class="row mt-2 text-black">
                    <div class="col-md-6">
                        <img src="assets/chemise9.jpg" class="d-block w-100 p-1" alt="..."
                            style="width:100%; height:150px;">
                    </div>
                    <div class="col-md-6">
                        <h6>Chemise couleur</h6>
                        <h1><span class="text-warning">*****</span></h1>
                        8000
                    </div>
                </div>
                <div class="row mt-2 mb-3 text-black">
                    <div class="col-md-6">
                        <img src="assets/chemise10.jpg" class="d-block w-100 p-1" alt="..."
                            style="width:100%; height:150px;">
                    </div>
                    <div class="col-md-6">
                        <h6>Chemise couleur</h6>
                        <h1><span class="text-warning">*****</span></h1>
                        8000
                    </div>
                </div> -->
            </div>
        </div>

    </div>


</div>
</div>
</div>

<?php else: ?>
<?php  header("Location:?admin=login"); ?>
<?php endif; ?>