<?php
/**
 * 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
 *  Необходимо представить пункты меню как элементы массива и вывести их циклом.
 *  Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
 */

$menuItems = [
    'first', 'second', 'third', 'four', 'five'
];

$sumItems = [
    'sub1', 'sub2', 'sub3', 'sub4', 'sub5'
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

</head>
<body>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">

                <?php foreach ($menuItems as $item): ?>
                <li class="dropdown menu__item">
                    <a href="#" class=""><?= $item ?><b class="caret"></b></a>

                    <ul class="dropdown-menu sub__menu" role="menu">
                        <?php foreach ($sumItems as $sumItem): ?>
                        <li><a href="#"><?= $item.'&nbsp;'.$sumItem ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php endforeach; ?>

            </ul>

        </li>
    </ul>
</div>


    <div class="menu">
        <span>Menu</span>
        <ul>
            <?php foreach ($menuItems as $item) : ?>
            <li>
                <div class="menu">
                    <span><?= $item ?></span>
                    <ul>
                        <?php foreach ($sumItems as $sumItem) : ?>
                            <li><?= $sumItem ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>