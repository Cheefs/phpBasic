<?php
session_start();
   $_SESSION['userId'] = $_SESSION['userId']?? null;
   $_SESSION['message'] =  $_SESSION['message']?? '';
   $_SESSION['isGuest'] = $_SESSION['isGuest']?? true;
   $_SESSION['isError'] =   $_SESSION['isError']?? false;
   $_SESSION['modalShow'] =$_SESSION['modalShow']?? false;

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
            include 'layout/partial/_header.php';
            include 'layout/partial/_modal.php';
            include 'layout/partial/_nav.php';
            include 'layout/products.php';
            include 'layout/partial/_footer.php';
        }
    }
    mysqli_close($connect);
} else {
    return 'NO DB CONNECTION PLEASE TRY AGAIN LETTER';
}

session_write_close();