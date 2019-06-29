<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="/scripts/index.js" defer></script>
    <title>Brand</title>
</head>
<body>
<header>
    <div class="container header-flex">
        <div class="header-left">
            <a class ="logo" href="#"><img src="/images/logo.png" alt="logo">
                <div class="brand-name">bran<span>d</span></div>
            </a>
            <form class="header-form" action="#">
                <div class="select" >
                    <div class="browse-container">
                        <a href="#" class="browse"> <span>Browse</span></a>
                        <nav class="browse-items hide">
                            <div class="browse-menu">
                                <h3><a href="#">Women</a></h3>
                                <ul>
                                    <li class="browse-menu-li"><a href="#">Dresses</a></li>
                                    <li class="browse-menu-li"><a href="#">Tops</a></li>
                                    <li class="browse-menu-li"><a href="#">Sweaters/Knits</a></li>
                                    <li class="browse-menu-li"><a href="#">Jackets/Coats</a></li>
                                    <li class="browse-menu-li"><a href="#">Blazers</a></li>
                                    <li class="browse-menu-li"><a href="#">Denim</a></li>
                                    <li class="browse-menu-li"><a href="#">Leggings/Pants</a></li>
                                    <li class="browse-menu-li"><a href="#">Skirts/Shorts</a></li>
                                    <li class="browse-menu-li"><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                            <div class="browse-menu">
                                <h3><a href="#">Man</a></h3>
                                <ul>
                                    <li class="browse-menu-li"><a href="#">Tees/Tank tops</a></li>
                                    <li class="browse-menu-li"><a href="#">Shirts/Polos</a></li>
                                    <li class="browse-menu-li"><a href="#">Sweaters</a></li>
                                    <li class="browse-menu-li"><a href="#">Sweatshirts/Hoodies</a></li>
                                    <li class="browse-menu-li"><a href="#">Blazers</a></li>
                                    <li class="browse-menu-li"><a href="#">Jackets/vests</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <input type="text" class="search-text" placeholder="Search for Item...">
                    <a href="#" class="find-btn search-button"><i class="fas fa-search"></i></a>
                </div>
            </form>
        </div>
        <div class="header-right">
            <div class="cart-btn-block">
                <?php include 'engine/cartItems.php' ?>
            </div>
            <?php include '_login.php'; ?>
        </div>
    </div>
</header>