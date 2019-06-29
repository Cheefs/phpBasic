<?php
session_start();

$user_id = $_SESSION['userId'];

if ($user_id != null) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';
    if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
        $id = (int)$_GET['product_id'];
        $connect = dbConnect();

        if (!is_null($connect)) {
            $query = "SELECT * FROM `shop`.products WHERE id=$id;";
            $result = mysqli_query($connect, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $query = "SELECT * FROM `shop`.cart WHERE product_id=$id AND user_id=$user_id";
                $result = mysqli_query($connect, $query);

                if ($result->num_rows > 0) {
                    $result = mysqli_fetch_assoc($result);
                    $count = $result['count'] + 1;
                    $query = "UPDATE `shop`.cart SET count = $count WHERE product_id=$id AND user_id=$user_id" ;
                } else {
                    $query = "INSERT INTO `shop`.cart (product_id, user_id) VALUES({$id}, {$user_id})";
                }
                $result = mysqli_query($connect, $query);
            }
            mysqli_close($connect);
            scenarioDone('PRODUCT ADD TO YOUR CART', true);
        } else {
            scenarioDone('NO DB CONNECTION PLEASE TRY AGAIN LETTER', true, true);
        }
    }
} else {
    scenarioDone('PLEASE LOGIN FIRST!', true, true);
}

function scenarioDone($message, $modal = false, $error = false) {
    $_SESSION['modalShow'] = $modal;
    $_SESSION['isError'] = $error;
    $_SESSION['message'] = $message;
    header('Location: /index.php');
    exit();
}

session_write_close();