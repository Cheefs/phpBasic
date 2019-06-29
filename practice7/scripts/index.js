const $cart = document.querySelector('.cart-btn-block');
$cart.addEventListener("click", (e) => {
    if (e.target.classList.contains('cart__button') || e.target.parentElement.classList.contains('cart__button') ) {
        e.preventDefault();
        const items = $cart.querySelector('.cart-items');
        items.classList.toggle('active');
    }
});

const $modal = document.querySelector('.modal__container');

$modal.addEventListener('click', (e) => {
    const $target = e.target;
    if ($target.classList.contains('register_link')) {
        $modal.querySelector('.modal_login').classList.add('hide');
        $modal.querySelector('.modal_register').classList.remove('hide');
        $modal.querySelector('.modal_register').querySelector('.header_text').textContent = 'Register';
    }
});