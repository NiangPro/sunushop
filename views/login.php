<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <?php require_once("themes/flash.php"); ?>
                        <div class="card-header bg-success">
                            <h4>Connexion</h4>
                        </div>

                        <form class="pb-5" method="post" action="">
                            <div class="form-group">
                                <input type="email" name="email" value="<?= getInputValue("email"); ?>"
                                    class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Entrer votre adresse email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="mdp" value="<?= getInputValue("mdp"); ?>"
                                    class="form-control form-control-lg " id="exampleInputPassword1"
                                    placeholder="Entrer votre mot de passe">
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                    class="btn btn-block btn-outline-info btn-lg font-weight-medium auth-form-btn"
                                    name="connecter">Se
                                    connecter</button>
                            </div>

                            <div class="mb-2 mt-2">
                                <a type="button" href="index.php"
                                    class="btn btn-block btn-outline-success auth-form-btn">
                                    Accueil </a>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                    href="?admin=register" class="text-info">Create</a>
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
<!-- container-scroller -->