<div class="card">
    <div class="card-body">
        <div class="card-body">
            <h1 style="color:black;">Produits</h1>
            <div class="mt-4">
                <h3>Formulaire d'<?= isset($produit)?'edition':'ajout'; ?> d'un produit</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <?php if (isset($produit)) : ?>
                    <input type="hidden" value="<?= $produit->image ?>" name="ancien">
                    <input type="hidden" value="<?= $produit->id ?>" name="id">
                    <?php endif; ?>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-md-2 mt-3">Nom</label>
                                <input type="text" name="nom" value="<?= isset($produit)? $produit->nom:''; ?>" id=""
                                    class="form-control col-md-10" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-md-2 mt-3">Prix
                                    unitaire</label>
                                <input type="text" value="<?= isset($produit)? $produit->prix:''; ?>" name="prix" id=""
                                    class="form-control col-md-10" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-md-3 mt-3">Quantité de
                                    stock</label>
                                <input type="number" value="<?= isset($produit)? $produit->qStock:''; ?>" name="qStock"
                                    id="" class="form-control col-md-9" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-md-3 mt-3">Description</label>
                                <input type="textarea" value="<?= isset($produit)? $produit->description:''; ?>"
                                    name="description" id="" class="form-control col-md-9" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-md-3 mt-3">Catégorie</label>
                                <select name="idcategorie" id="" class="form-control col-md-9">
                                    <option value="">Veuillez selectionner une classe</option>
                                    <?php foreach($categories as $categorie): ?>
                                    <option
                                        <?= isset($produit) && $produit->idcategorie==$categorie->id ?'selected': '' ?>
                                        value="<?= $categorie->id; ?>"><?= $categorie->nomCategorie; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <?php if (isset($produit)) : ?>
                        <img src="./images/<?= $produit->image ?>" width="150" height="130" alt="" class="p-4">
                        <?php endif; ?>
                        <div class="form-group row ml-2">
                            <label for="" class="col-md-3 mt-3 ">Image</label>
                            <input type="file" name="image" id="" class="form-control col-md-9" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <!-- <div class="col-md-6">
                        
                    </div> -->
                    </div>
                    <div class="row">
                        <?php if(isset($produit)) : ?>
                        <button type="submit" name="editer" class="btn btn-success mr-3">editer</button>
                        <?php else : ?>
                        <button type="submit" name="ajouter" class="btn btn-success mr-3">Ajouter</button>
                        <?php endif; ?>
                        <a type="submit" href="?admin=produit" class="btn btn-light">Retour</a>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>