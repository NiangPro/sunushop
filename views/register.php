<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-7 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <?php require_once("themes/flash.php"); ?>
                        <div class="row card-header bg-success">
                            <div class="col-md-8 text-white mt-1 ">
                                <h4>Compte</h4>
                            </div>
                            <div class="col-md-4 text-right text-primary mt-1">
                                <a href="index.php" class="">Retour a l'accueil</a>
                            </div>
                        </div>
                        <form class="pt-3" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Prenom</label>
                                        <input type="text" name="prenom" value="<?= getInputValue("prenom"); ?>"
                                            class="form-control form-control-lg" id="exampleInputUsername1"
                                            placeholder="Entrer votre prenom">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nom</label>
                                        <input type="text" name="nom" value="<?= getInputValue("nom"); ?>"
                                            class="form-control form-control-lg" id="exampleInputUsername1"
                                            placeholder="Entrer votre nom">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tel</label>
                                        <input type="tel" name="tel" value="<?= getInputValue("tel"); ?>"
                                            class="form-control form-control-lg" id="exampleInputUsername1"
                                            placeholder="Entrer votre numero de telephone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Adresse</label>
                                        <input type="text" name="adresse" value="<?= getInputValue("adresse"); ?>"
                                            class="form-control form-control-lg" id="exampleInputUsername1"
                                            placeholder="Entrer votre adresse">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="<?= getInputValue("email"); ?>"
                                            class="form-control form-control-lg" id="exampleInputUsername1"
                                            placeholder="Entrer votre email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Mot de passe</label>
                                        <input type="text" name="mdp" value="<?= getInputValue("mdp"); ?>"
                                            class="form-control form-control-lg" id="exampleInputUsername1"
                                            placeholder="Entrer votre mot de passe">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                    name="register">S'inscrire</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Avez-vous deja un compte? <a
                                    href="?admin=login" class="text-primary">Connecter</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>