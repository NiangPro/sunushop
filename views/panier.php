<div class="container-fluid p-5  mt-2">
    <?php if(isset($_SESSION['user']) && isset($_GET["page"])): ?>
    <div class="row">
        <div class="col-md-7">
            <table class="table table-bordered">
                <thead class="card-header">
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantite</th>
                        <th>Prix Total</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pp as $p): ?>
                    <tr>
                        <td><img src="images/<?= $p->image ?>" alt="" style="width:100px;height:100px;"></td>
                        <td><?= $p->prix; ?></td>
                        <td><?= $p->qStock; ?></td>
                        <td>
                            <?= ($p->prix*$p->qStock); ?>
                        </td>
                        <td>
                            <a href="?page=panier&delete=<?= $p->id; ?>" class="btn btn-danger btn-sm"><i
                                    class="fa fa-trash" style="color:white" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <table class="table table-bordered pb-5">
                <thead class="card-header">
                    <tr>
                        <th>
                            <h2>Résumé du panier</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="ml-2">
                        <td class="row ml-2 mr-2 p-4" style="border-left:none;border-right:none">
                            <h5 class="col-md-6">Sous Total</h5>
                            <h5 class="col-md-6 text-right">36000 fcfa</h5>
                        </td>
                        <td class="row ml-2 mr-2 p-4" style="border-left:none;border-right:none">
                            <h2 class="col-md-6">Total</h2>
                            <h2 class="col-md-6 text-right">36000 fcfa</h2>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button class="btn btn-primary form-control p-1" style="font-size: 23px;">Valider la commande</button>

            <!-- <div class="card">
                <div class="container"></div>
                <div class="card-header">
                    <h2>Résumé du panier</h2>
                </div>
                <div class="card-body row">
                    <div class="col-md-6">
                        <h5>Sous Total</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>36000 fcfa</h5>
                    </div>
                </div>
            </div> -->
            <!-- <table class="table table-bordered">
                <thead class="card-header">
                    <tr>
                        <th>
                            <h2>Résumé du panier</h2>
                        </th>
                    </tr>
                </thead>
                <tbody class="card">
                    <tr>
                        <td class="row">
                            <div class="col-md-6">
                                <h5>Sous Total</h5>
                            </div>
                            <div class="col-md-6"> 36000 fcfa</div>
                        </td>

                    </tr>
                </tbody>
            </table> -->

        </div>
    </div>

    <?php else: ?>
    <?php require_once("partials/flash1.php"); ?>
    <?php endif; ?>


</div>