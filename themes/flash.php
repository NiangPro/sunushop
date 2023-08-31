<div class="">
    <?php  if(isset($message) && $message): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $message ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    <?php endif;?>
</div>