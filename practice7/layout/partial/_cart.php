
<a class="cart__button" href="cart.html">
    <img class="cart-image" src="/images/cart.svg" alt="cart">
    <span class="cart-items-total"><?= getCartCount($cartItems?? null ) ?></span>
</a>
<div class="cart-items">
    <div class="cart__container top-block">
        <?php foreach ($cartItems ?? [] as $item): ?>
            <div class="in-cart-item">

                <a href="/view.php?id=<?= $item['id'] ?>" class="cart__photo">
                    <img class="item-photo" src="<?= $item['photo'] ?>" alt="img">
                </a>

                <div class="item-container">
                    <div class="item-info">
                        <h2><?= $item['name'] ?></h2>
                        <span>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </span>
                        <h3><?= $item['count'] ?> x $ <?= $item['price'] ?></h3>
                    </div>
                    <a href="/engine/cart/delete.php?id=<?= $item['id'] ?>" class="btn-remove-item">
                        <i class="fas fa-times-circle btn_remove"></i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="bottom-block">
        <div class="cart-total-price">
            <div class="cart-total__text"> TOTAL </div>
            <div class="cart-total__price"> $ <?= getCartTotalPrice($cartItems?? null ) ?> </div>
        </div>
        <a href="checkout.html" class="cart-btn btn-check-out">Checkout</a>
        <a href="cart.html" class="cart-btn btn-to-cart">Go to cart</a>
    </div>
</div>
