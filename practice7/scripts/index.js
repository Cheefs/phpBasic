function sendRequest(url, data) {
    return fetch(url, {
        method: 'POST',
        body: data,
    }).then((response) => response.json());
}

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

const $loginButton = document.querySelector('.btn-login');
if ($loginButton) {
    $loginButton.addEventListener('click', (e) => {
        e.preventDefault();
        const username = document.getElementById('username').value,
            password = document.getElementById('password').value;

        const formData = new FormData();
        formData.append('username', username);
        formData.append('password', password);
        sendRequest('engine/login/auth.php', formData).then((v) => {
            if ( v.result )
                return  window.location.href = 'my-account.php';
            document.querySelector('.help-block').textContent = v.message;
        });
    });
}

// const $productsContainer = document.querySelector('.product-block');
// $productsContainer.addEventListener('click', (e) => {
//      const $target = e.target;
//      if ($target.classList.contains('add-to-cart') || $target.parentElement.classList.contains('add-to-cart')) {
//          const url = $target.classList.contains('add-to-cart')?
//              $target.getAttribute('href') : $target.parentElement.getAttribute('href');
//          e.preventDefault();
//          sendRequest(url).then((v) => {
//              // if ( v.result )
//                  // return  window.location.href = 'my-account.php';
//              // document.querySelector('.help-block').textContent = v.message;
//          });
//      }
// });

