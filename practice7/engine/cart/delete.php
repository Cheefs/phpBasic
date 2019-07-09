<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';
include WEB_ROOT.'/engine/helpers/validate.php';
include WEB_ROOT.'/engine/helpers/location.php';

session_start();

$user_id = safe($_SESSION['userId']);
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)safe($_GET['id']);
    $is_guest = (int)$_SESSION['isGuest'];
    $connect = dbConnect();

    if (!is_null($connect)) {
        $query = sprintf("SELECT * FROM `shop`.products WHERE id= %d", $id );
        $result = mysqli_query($connect, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $query = sprintf("SELECT * FROM `shop`.cart WHERE product_id = %d AND user_id = %d  AND is_guest = %d", $id, $user_id, $is_guest);
            $result = mysqli_query($connect, $query);
            $result = mysqli_fetch_assoc($result);
            if (!is_null($result)) {
                if ($result['count'] > 1) {
                    $count = $result['count'] - 1;
                    $query = sprintf("UPDATE `shop`.cart SET count = %d WHERE product_id = %d AND user_id = %d AND is_guest = %d", $count, $id, $user_id, $is_guest);
                } else {
                    $query = sprintf("DELETE FROM `shop`.cart WHERE product_id = %d AND user_id = %d AND is_guest = %d", $id, $user_id, $is_guest);
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

session_write_close();