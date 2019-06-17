
<div id = "modal-dialog" class = "modal-dialog <?= is_null($modalImage)? 'hide' : 'show' ?>">
    <div class="btn-dismiss-modal">&times;</div>
    <div class="modal-overflow"></div>

    <div id="modal" class="modal-window">
        <img class="modal__img" src="<?= !is_null($modalImage)? $modalImage : '' ?>" alt="">
    </div>
</div>
