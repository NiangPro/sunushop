<!-- <form class="form-inline my-2 my-lg-0 m-auto" method="post">
    <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
    <button class="btn btn-outline-light bg-dark my-2 my-sm-0" name="recherche">Rechercher</button>
</form> -->
<div class="container">

    <?php if (count($pt) !== 0): ?>

    <div class="card" style="text-align: center; font-size: 20px; margin: auto;">
        <div class="card-header bg-gradient-success">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-white" style="text-align: left;">Liste des produits Trouvés</h3>
                </div>

            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <!-- <th>Tel</th>
                            <th>Adresse Email</th>
                            <th>Docteur</th>
                            <th>Date</th>
                            <th>heure</th>
                            <th>statut</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pt as $p) : ?>
                    <tr>
                        <td><?= $p->nom ?></td>
                    </tr>
                    <?php endforeach; ?>



                </tbody>
            </table>
        </div>
    </div>
    <?php else: ?>
    <?= "<h1>Aucun produit trouvés</h1>"; ?>
    <?php endif; ?>
</div>