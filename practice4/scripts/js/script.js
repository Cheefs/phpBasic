const $form = document.getElementById('modalForm');

$form.addEventListener('click', (e) => {
    const $target = e.target;
    if ($target.classList.contains('photo__img')) {
        const $modal = document.querySelector('.modal_input');
        $modal.value = $target.getAttribute('src');
        $form.submit();
    }
});

const $modalDialog = document.getElementById('modal-dialog');
$modalDialog.addEventListener('click', (e) => {
    const $target = e.target;
    if ($target.classList.contains('btn-dismiss-modal') || $target.classList.contains('modal-overflow')) {
        $modalDialog.classList.toggle('hide');
        document.querySelector('.modal_input').value = null;
        $form.submit();
    }
});
