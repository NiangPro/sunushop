<div class="container col-md-9 mt-5">
    <?php if(isset($message) && $message): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4><?= $message ?><a href="?admin=login">Connecter</a> d'abord</h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    <?php endif; ?>
</div>
<?php  ?>
<?php ?>