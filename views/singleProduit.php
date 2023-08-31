<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mt-5 ">
            <img src="./images/<?= $p->image ?>" alt="" style="width: 100%;height:190px;">
        </div>
        <div class="col-md-8 mt-5 text-left">
            <H4><?= ucfirst($p->nom) ?></H4>
            <h1 class="text-warning">*****</h1>
            <p style="font-size: 25px;"><?= $p->prix ?></p>
            <!-- <div class="btn-group" role="group" aria-label="Basic example">
                <a name="moins" class="btn btn-primary btn-sm p-3">-</a>
                <a id="input" name="quantite" class="btn btn-secondary btn-sm p-3"></a>
                <a name="plus" class="btn btn-primary btn-sm p-3">+</a>
            </div> -->
            <a href="?page=panier&id=<?= $p->id; ?>" class="btn btn-success btn-lg"><i class="fa-solid fa-cart-shopping"
                    style="color: white;"></i>&nbsp;Ajouter Panier</a>
            <div class="row mt-4">
                <p style="font-size: 20px;">Suivre <img src="fac3.webp" alt="" style="width: 18px;height:15px;"
                        class="mb-1"><img src="in.png" alt="" style="width: 27px;height:27px;" class="mb-1"></p>

            </div>
        </div>


    </div>


</div>

<!-- <script>
let input = document.getElementById("input");

function nbrProduitPanier() {
    let moins = 0;
    let plus = 0;
    let quantite = 1;
    let result;
    if (isset($_SESSION['user']) && isset($_GET['id'])) {
        if (result == plus) {
            quantite += 1;
            input.innerText = quantite;
        } else {
            quantite -= 1;
            input.innerText = quantite;
        }
    }
}
</script> -->