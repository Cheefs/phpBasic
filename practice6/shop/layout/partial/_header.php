<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/shop/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Brand</title>
</head>
<body>

<header>
    <div class="container header-flex">
        <div class="header-left">
            <a class ="logo" href="index.html"><img src="images/logo.png" alt="logo">
                <div class="brand-name">bran<span>d</span></div>
            </a>
            <form class="header-form" action="#">
                <div class="select" >
                    <div class="browse-container">
                        <a href="/shop/index.php" class="browse"> <span>Browse</span></a>
                        <nav class="browse-items">
                            <div class="browse-menu">
                                <h3><a href="/shop/index.php">Women</a></h3>
                                <ul>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Dresses</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Tops</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Sweaters/Knits</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Jackets/Coats</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Blazers</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Denim</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Leggings/Pants</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Skirts/Shorts</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Accessories</a></li>
                                </ul>
                            </div>
                            <div class="browse-menu">
                                <h3><a href="/shop/index.php">Man</a></h3>
                                <ul>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Tees/Tank tops</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Shirts/Polos</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Sweaters</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Sweatshirts/Hoodies</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Blazers</a></li>
                                    <li class="browse-menu-li"><a href="/shop/index.php">Jackets/vests</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <input type="text" placeholder="Search for Item...">
                    <a href="/shop/index.php" class="find-btn"><i class="fas fa-search"></i></a>
                </div>
            </form>
        </div>
        <div class="header-right">
            <div class="cart-btn-block">
                <a href="cart.html">
                    <img class="cart-image" src="images/cart.svg" alt="cart">
                    <span class="cart-items-total">2</span>
                </a>
                <div class="cart-items">
                    <div class="top-block">
                        <a href="single-page.html" class="in-cart-item">
                            <div class="item-photo" style="background:url('images/kart-item1.jpg')">
                            </div>
                            <div class="item-container">
                                <div class="item-info">
                                    <h2>Rebox Zane</h2>
                                    <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                    <h3>1 x $250</h3>
                                </div>
                                <div class="btn-remove-item">
                                    <i class="fas fa-times-circle"></i>
                                </div>
                            </div>
                        </a>
                        <a href="single-page.html" class="in-cart-item">
                            <div class="item-photo" style="background:url('images/kart-item2.jpg')"></div>
                            <div class="item-container">
                                <div class="item-info">
                                    <h2>Rebox Zane</h2>
                                    <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                    <h3>1 x $250</h3>
                                </div>
                                <div class="btn-remove-item">
                                    <i class="fas fa-times-circle"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bottom-block">
                        <div class="cart-total-price">
                            <div>TOTAL </div>
                            <div> $500.00 </div>
                        </div>
                        <a href="checkout.html" class="cart-btn btn-check-out">Checkout</a>
                        <a href="cart.html" class="cart-btn btn-to-cart">Go to cart</a>
                    </div>
                </div>

            </div>

            <a href="#" class="my-account-btn">My Account</a>
        </div>
    </div>
</header>

