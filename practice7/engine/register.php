<?php

include 'helpers/validate.php';
include 'helpers/location.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';
session_start();

$username = $_POST['username']?? null;
$password = $_POST['password']?? null;
$email = $_POST['email']?? null;
$name = $_POST['name']?? null;

if (checkValue($username) && checkValue($password) && checkValue($email) && checkValue($name)) {
    $username = safe($username);
    $password = md5(safe($password));
    $email = safe($email);
    $name = safe($name);

    $connect = dbConnect();

    if (!is_null($connect)) {
        $query = sprintf("INSERT INTO `shop`.users (username,password,email,name) VALUES (\"%s\", \"%s\", \"%s\", \"%s\")",
            $username, $password, $email, $name);
        $result = mysqli_query($connect, $query);

        if ($result){
            $_SESSION['userId'] = $connect->insert_id;
            $_SESSION['isGuest'] = false;
            $_SESSION['modalShow'] =  false;

            location('/my-account.php');
        }
        mysqli_close($connect);
    } else {
        $_SESSION['modalShow'] = true;
        $_SESSION['isError'] = true;
        $_SESSION['message'] = 'DB error';
        location('/index');
    }

} else {
    $_SESSION['message'] = 'You must fill all fields';
    $_SESSION['modalShow'] =  true;
    $_SESSION['isError'] = true;
    location('/index.php');
}

session_write_close();