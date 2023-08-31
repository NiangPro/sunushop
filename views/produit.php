<div class="card mt-3">
    <div class="card-body">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-8">
                    <h2 style="color:black;">Produits</h2>
                </div>
                <div class="col-md-4 text-right">
                    <a href="?admin=produit&type=add" class="btn btn-success btn-xm">Ajouter</a>
                </div>
            </div>

            <div class="mt-4">
                <h3>La liste des produits</h3>
                <table class="table table-bordered">
                    <thead class="card-header">
                        <tr>
                            <th>Nom</th>
                            <th>Prix unitaire</th>
                            <th>Description</th>
                            <th>Quantité de Stock</th>
                            <th>Catégorie</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($produits as $produit): ?>
                        <tr>
                            <td><?= ucfirst($produit->nom); ?></td>
                            <td><?= $produit->prix; ?></td>
                            <td><?= ucfirst($produit->description); ?></td>
                            <td><?= $produit->qStock; ?></td>
                            <td><?= $produit->nomcategorie; ?></td>
                            <td>
                                <img src="./images/<?= $produit->image ?>" width="50" height="30" alt="">

                            </td>
                            <td>
                                <a href="?admin=produit&type=add&id=<?=$produit->id; ?>" class="btn btn-dark btn-sm"
                                    style="border-radius: 25px;">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="?admin=produit&delete=<?=$produit->id; ?>" class="btn btn-danger btn-sm"
                                    style="border-radius: 25px;">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>