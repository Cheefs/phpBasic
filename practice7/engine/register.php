<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';
include WEB_ROOT.'/engine/helpers/validate.php';
include WEB_ROOT.'/engine/helpers/location.php';
include WEB_ROOT.'/engine/helpers/guestUser.php';

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
        $query = sprintf("INSERT INTO `shop`.users (username,password,email,name) VALUES (\"%s\", \"%s\", \"%s\", \"%s\")", $username, $password, $email, $name);
        $result = mysqli_query($connect, $query);

        if ($result){
            $newId = $connect->insert_id; // id полученное при регистрации
            getGuestCart($_SESSION['userId'], $newId, $connect);
            $_SESSION['userId'] = $newId;
            $_SESSION['isGuest'] = false;
            $_SESSION['modalShow'] =  false;

            location('/my-account.php');
        }
        mysqli_close($connect);
    } else {
        scenarioDone('DB error', true,true);
    }
} else {
    scenarioDone('You must fill all fields', true,true);
}