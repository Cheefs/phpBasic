<?php

//require_once 'engine/products.php';
//require_once 'layout/products.php';


require_once 'conf/init.php';
const IMG_DIR = '/images';

$connect = dbConnect();
if (!is_null($connect)) {
    $query = "SELECT * FROM `shop`.products;";
    $result = mysqli_query($connect, $query);

    if ($result){
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
        if (count($products) > 0) {
            require_once 'layout/partial/_header.php';
            require_once 'layout/partial/_nav.php';
            require_once 'layout/products.php';
            require_once 'layout/partial/_footer.php';
        }
    }
    mysqli_close($connect);
} else {
    return 'NO DB CONNECTION PLEASE TRY AGAIN LETTER';
}
