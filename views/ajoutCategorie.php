<div class="card mt-4">
    <div class="card-body mt-4">
        <h1 style="color:black;">Catégorie</h1>
        <div class="mt-4">
            <h3 class="mb-3">Formulaire d'<?= isset($_GET["id"])?'edition':'ajout' ?> catégorie</h3>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="" class="col-md-2  mt-3 ">Nom</label>
                    <input type="text" name="nomCategorie" value="<?=isset($categorie)? $categorie->nomCategorie:'' ?>"
                        id="" class="form-control col-md-9 text-left" placeholder="" aria-describedby="helpId">
                </div>

                <div class="row">
                    <?php if(isset($_GET["id"])) : ?>
                    <button type="submit" name="editer" class="btn btn-success mr-3">editer</button>
                    <?php else : ?>
                    <button type="submit" name="ajouter" class="btn btn-success mr-3">Ajouter</button>
                    <?php endif; ?>

                    <a type="submit" href="?page=categorie" class="btn btn-light">Retour</a>

                </div>
            </form>
        </div>
    </div>

</div>