<?php
session_start();

require_once 'conf/init.php';
include  WEB_ROOT.'/engine/helpers/location.php';
const IMG_DIR = '/images';

$connect = dbConnect();
if (!is_null($connect) && isset($_SESSION['userId']) && is_numeric($_SESSION['userId'])) {
    $query = sprintf("SELECT * FROM `shop`.users WHERE id= %d", $_SESSION['userId']);
    $result = mysqli_query($connect, $query);
    if ($result){
        $user = mysqli_fetch_assoc($result);
            include 'layout/partial/_header.php';
            include 'layout/partial/_modal.php';
            include 'layout/partial/_nav.php';
            include 'layout/account.php';
            include 'layout/partial/_footer.php';
    }
    mysqli_close($connect);
} else {
    location("/index.php");
}
