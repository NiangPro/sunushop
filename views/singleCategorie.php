<div class="container mt-5">
    <?php require_once("views/search.php"); ?>
    <div class="row mt-5">
        <?php if(count($produits)>0): ?>
        <?php foreach($produits as $prod): ?>
        <div class="card col-md-4 mt-2 pt-3">
            <img src="images/<?= $prod->image ?>" alt="" style="width: 100%;height:170px;">
            <div class="card-body">
                <h4 class="card-title text-center"><?= ucfirst($prod->nom) ?></h4>
                <p style="font-size: 23px;" class="card-text text-center"><?= $prod->prix ?></p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-3 ">
                        <a href="?page=single&id=<?= $prod->id ?>" class="btn btn-outline-info">
                            <i class="fa fa-eye" style="color: #fd7c00;"></i>
                        </a>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3 ">
                        <a href="?page=panier&id<?=$prod->id;?>" class="btn btn-outline-info ml-2 ">
                            <i class="fa-solid fa-cart-shopping" style="color: #fd7c00;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <h4>Aucun produit pour le moment</h4>
        <?php endif; ?>

    </div>


</div>