<?php
session_start();


//var_dump($_POST); die();
require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';
include WEB_ROOT.'/engine/helpers/validate.php';
include WEB_ROOT.'/engine/helpers/location.php';

$user_id = safe($_SESSION['userId']);

if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
    $id = safe((int)$_GET['product_id']);
    $is_guest = (int)$_SESSION['isGuest'];
    $connect = dbConnect();

    if (!is_null($connect)) {
        $query = "SELECT * FROM `shop`.products WHERE id={$id}";
        $result = mysqli_query($connect, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $query = sprintf("SELECT * FROM `shop`.cart WHERE product_id= %d AND user_id = %d AND is_guest = %d", $id, $user_id, $is_guest);


            $result = mysqli_query($connect, $query);
            if ($result->num_rows > 0) {
                $result = mysqli_fetch_assoc($result);
                $count = $result['count'] + 1;
                $query = sprintf("UPDATE `shop`.cart SET count = %d WHERE product_id = %d AND user_id = %d AND is_guest = %d", $count, $id, $user_id, $is_guest );
            } else {
                $query = sprintf("INSERT INTO `shop`.cart (product_id, user_id, is_guest) VALUES(%d, %d, %d)", $id, $user_id, $is_guest);
            }

            $result = mysqli_query($connect, $query);
        }
        mysqli_close($connect);
        scenarioDone('PRODUCT ADD TO YOUR CART', true);
    } else {
        scenarioDone('NO DB CONNECTION PLEASE TRY AGAIN LETTER', true, true);
    }
}
session_write_close();