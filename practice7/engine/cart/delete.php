<?php
session_start();

$user_id = $_SESSION['userId'];
require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];
    $connect = dbConnect();

    if (!is_null($connect)) {
        $query = "SELECT * FROM `shop`.products WHERE id=$id;";
        $result = mysqli_query($connect, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $query = "SELECT * FROM `shop`.cart WHERE product_id=$id AND user_id=$user_id";
            $result = mysqli_query($connect, $query);
            $result = mysqli_fetch_assoc($result);
            if (!is_null($result)) {
                if ($result['count'] > 1) {
                    $count = $result['count'] - 1;
                    $query = "UPDATE `shop`.cart SET count = $count WHERE product_id=$id AND user_id=$user_id" ;
                } else {
                    $query = "DELETE FROM `shop`.cart WHERE product_id=$id AND user_id=$user_id" ;
                }
                $result = mysqli_query($connect, $query);
            }
        }
        mysqli_close($connect);
        scenarioDone();
    } else {
        scenarioDone('NO DB CONNECTION PLEASE TRY AGAIN LETTER', true, true);
    }
}

function scenarioDone($message = null, $modal = false, $error = false) {
    $_SESSION['modalShow'] = $modal;
    $_SESSION['isError'] = $error;
    $_SESSION['message'] = $message;
    header('Location: /index.php');
    exit();
}

session_write_close();