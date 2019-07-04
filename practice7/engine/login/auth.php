<?php

include '../helpers/validate.php';
include '../helpers/location.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';

$username = $_POST['username']?? null;
$password = $_POST['password']?? null;

if (checkValue($username) && checkValue($password) ) {

    $connect = dbConnect();
    $username = safe($username);
    $password = md5(safe($password));

    $query = sprintf( "SELECT * FROM shop.users WHERE username = \"%s\" AND password = \"%s\"", $username, $password);

    $result = mysqli_query($connect, $query);

    if ($result) {
        session_start();
        $result = mysqli_fetch_assoc($result);
        $_SESSION['userId'] = $result['id'];
        $_SESSION['isGuest'] = false;
        $_SESSION['modalShow'] = false;
        session_write_close();
        location('/my-account.php');
    } else {
        $_SESSION['modalShow'] = true;
        location('/index.php');
    }
} else {
    location('/index.php');
}





