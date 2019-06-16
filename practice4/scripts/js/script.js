const $modalDialog = document.getElementById('modal-dialog');
const $modal = document.getElementById('modal');

const $photo = document.getElementById('photo');
$photo.addEventListener('click', handlerPhotoClick);
$modalDialog.addEventListener('click', handlerModalClick);

function handlerPhotoClick(e) {
    const $target = e.target;
    if ($target.classList.contains('photo__img') && $target.classList.contains('modal')) {
        $modalDialog.classList.toggle('hide');
        $modal.querySelector('.modal__img').setAttribute('src', $target.src);
    }
}

function handlerModalClick(e) {
    const $target = e.target;
    if ($target.classList.contains('btn-dismiss-modal') || $target.classList.contains('modal-overflow')) {
        $modalDialog.classList.toggle('hide');
    }
}
