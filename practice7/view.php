<?php

require_once 'conf/init.php';
const IMG_DIR = '/images';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $feedbackId = $_GET['feedback_id'] ?? null;

    $connect = dbConnect();
    if (!is_null($connect)) {
        $query = "SELECT * FROM `shop`.products p WHERE p.id = $id;";
        $result = mysqli_query($connect, $query);

        if ($result){
            $product = mysqli_fetch_assoc($result);

            $query = "SELECT * FROM `shop`.feedback f WHERE f.product_id = $id";
            $result = mysqli_query($connect, $query);

            $feedbackList = [];
            while ($row = mysqli_fetch_assoc($result)) {
                if ($feedbackId && $feedbackId == $row['id']) $selectedFeed = $row;
                $feedbackList[] = $row;
            }

            if (!is_null($product) && is_array($product) && count($product) > 0) {
                require_once 'layout/partial/_header.php';
                require_once 'layout/partial/_nav.php';
                require_once 'layout/single-page.php';
                require_once 'layout/partial/_footer.php';
            }
        }
        mysqli_close($connect);
    } else {
        return 'NO DB CONNECTION PLEASE TRY AGAIN LETTER';
    }
} else {
    echo 'PAGE NOT FOUND';
}


