<?php  $clients = afficheAllClient(); ?>
<?php $categories = afficheAllCategorie(); ?>
<?php $produits = afficheAllProduit(); ?>

<div class="d-xl-flex justify-content-between align-items-start">
    <h2 class="text-dark font-weight-bold mb-2"> Accueil </h2>

</div>
<div class="row">
    <div class="col-md-12">
        <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">


        </div>
        <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="mb-2 text-dark font-weight-normal">Produits</h3>
                                <h2 class="mb-4 text-dark font-weight-bold"><?= count($produits); ?></h2>
                                <div
                                    class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                                    <i class="mdi mdi-format-list-bulleted icon-md absolute-center text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="mb-2 text-dark font-weight-normal">Catégories</h3>
                                <h2 class="mb-4 text-dark font-weight-bold"><?= count($categories); ?></h2>
                                <div
                                    class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                                    <i class="mdi mdi-animation icon-md absolute-center text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="mb-2 text-dark font-weight-normal">Clients</h3>
                                <h2 class="mb-4  text-dark font-weight-bold">
                                    <?= count($clients); ?></h2>
                                <div
                                    class="dashboard-progress mb-5 pb-3 dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                                    <i class="mdi mdi-account-multiple icon-md absolute-center text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>