<?php if(isset($_GET["logout"])): ?>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModelLabel">Deconnexion</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">*</span>
                </button>
            </div>
            <div class="modal-body">
                Etes-vous sur de vouloir deconnecter ?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <a href="" class="btn btn-primary">Oui</a>
            </div>
        </div>

    </div>
</div>
<?php endif; ?>