<?php
$product = $product?? null;
$feedbackList = $feedbackList?? [];
$selectedFeed = $selectedFeed ?? null;

if ( $product ):?>
<div class="product-top-panel">
    <div class="container">
        <h3 class="top-panel-h3"><a class="breadcrumbs-a" href="single-page.html">Single Page</a></h3>
        <nav class="breadcrumbs">
            <a class="breadcrumbs-a" href="index.html">Home</a><span>/</span>
            <a class="breadcrumbs-a" href="/shop/index.php">Product</a><span>/</span>
            <a class="breadcrumbs-a" href="/shop/index.php">Woman</a><span>/</span>
            <a class="breadcrumbs-a now" href="#">Single Page</a>
        </nav>
    </div>
</div>

<div class="slider">
    <a href="#" class="arrow left"><i class="fas fa-angle-right"></i></a>
    <div class="photo">
        <img class="photo-link" src="<?= $product['photo'] ?>" alt="photo">
    </div>
    <a href="#" class="arrow right"><i class="fas fa-angle-left"></i></a>
</div>

<div class="container product-info">
    <div class="product-desc">
        <h3 class="product-desc-h3">COLLECTION</h3>
        <div class="line">
            <div class="line-color"></div>
        </div>
        <article class="product-desc-article">
            <h3 class="article-h3"> <?= $product['name'] ?> </h3>
            <p class="article-p">
                <?= $product['desc'] ?>
            </p>
            <div class="material-desinger">
                <div class="material-desinger-el">MATERIAL:<a class="material-desinger-link" href="#"> <?= $product['material'] ?></a></div>
                <div class="material-desinger-el">DESIGNER:<a class="material-desinger-link" href="#"> <?= $product['brand'] ?></a></div>
            </div>

            <div class="product-price">$ <?= $product['price'] ?></div>
        </article>

        <div class="product-params">
            <div class="choise">
                <h3 class="product-params-h3">CHOOSE COLOR</h3>
                <select class="product-params-select">
                    <option value="Red">Red</option>
                </select>
                <div class="color-example"></div>
            </div>

            <div class="choise size">
                <h3 class="product-params-h3">CHOOSE SIZE</h3>
                <select class="product-params-select">
                    <option value="XXL">XXL</option>
                    <option value="XXL">XL</option>
                    <option value="XXL">L</option>
                    <option value="XXL">M</option>
                    <option value="XXL">S</option>
                    <option value="XXL">XS</option>
                    <option value="XXL">XXS</option>
                </select>
            </div>
            <div class="choise">
                <h3 class="product-params-h3">QUANTITY</h3>
                <input class="product-params-input" type="number" value="2">
            </div>
            <a class="product-params-a" href="#"><img  class="product-params-img" src="images/single-page-cart.svg" alt="cart">
                <span class="product-params-span">
                    Add to Cart
                </span>
            </a>
        </div>
    </div>
    <section class="comments" id="comments">

        <div class="comments__list">
            <?php foreach ($feedbackList as $feedback):?>
                <div class="comment">
                    <div class="comment__header">
                        <div>
                            <span>От пользователя:</span>
                            <span class="text_marked"><?= $feedback['user_name'] ?></span>
                        </div>
                        <div>
                            <a class="button" href="/shop/view.php?id=<?= $product['id'] ?>&feedback_id=<?= $feedback['id'] ?>&#comments">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a class="button" href="/shop/engine/delete.php?id=<?= $feedback['id'] ?>&product_id=<?= $product['id'] ?>">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="comment__body">
                        <div class="comment__text"><?= $feedback['text'] ?></div>
                        <div class="comment__buttons"></div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <form action="/shop/engine/create.php" class="comment__form" method="post">

            <label for="userName"> Ваше имя </label>
            <input name="user" type="text" id="userName" required class="input" value="<?= $selectedFeed['user_name']?? ''?>">
            <label for="userComment">Комментарий</label>

            <textarea name="text" id="userComment" required class="input textarea" ><?= $selectedFeed['text']?? ''?></textarea>

            <div class="hide">
                <input name="product_id" type="text" hidden value="<?= $product['id'] ?>">
                <input name="id" type="text" hidden value="<?= $selectedFeed['id']?? null ?>">
            </div>

            <label for="inputInsert" class="button_submit <?= isset($selectedFeed['id'])? 'update': 'insert' ?>">
                <?= isset($selectedFeed['id'])? 'Сохранить изменения': 'Добавить комментарий '  ?>
            </label>
            <input name="operation" type="submit" id="inputInsert" class="hide" value="1">
        </form>
    </section>
</div>

<?php endif; ?>