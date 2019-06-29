<?php

require_once 'conf/init.php';
const IMG_DIR = '/images';

$connect = dbConnect();

$id = $_SESSION['userId'];
if (!is_null($connect)) {
    $cartItems = [];
    if (!is_null($id)) {
        $query = "SELECT * FROM `shop`.cart c INNER JOIN shop.products p ON p.id = c.product_id WHERE c.user_id = {$id}";
        $result = mysqli_query($connect, $query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $cartItems[] = $row;
            }
        }
    }
    include './layout/partial/_cart.php';
    mysqli_close($connect);
} else {
    return 'NO DB CONNECTION PLEASE TRY AGAIN LETTER';
}

function getCartTotalPrice($arr = null) {
    $price = 0;
    if (!is_null($arr) && is_array($arr) && count($arr) > 0) {
        foreach ($arr as $el) {
            $price += $el['price'] * $el['count'];
        }
    }
    return $price;
}

function getCartCount($arr = null) {
    $count = 0;
    if (!is_null($arr) && is_array($arr) && count($arr) > 0) {
        foreach ($arr as $el) {
            $count += $el['count'];
        }
    }
    return $count;
}
