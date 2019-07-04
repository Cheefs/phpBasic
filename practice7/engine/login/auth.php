<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/conf/init.php';

include WEB_ROOT.'/engine/helpers/validate.php';
include WEB_ROOT.'/engine/helpers/location.php';
include WEB_ROOT.'/engine/helpers/guestUser.php';


$username = $_POST['username']?? null;
$password = $_POST['password']?? null;

session_start();

if (checkValue($username) && checkValue($password) ) {
    $connect = dbConnect();
    $username = safe($username);
    $password = md5(safe($password));

    $query = sprintf( "SELECT * FROM shop.users WHERE username = \"%s\" AND password = \"%s\"", $username, $password);

    $result = mysqli_query($connect, $query);
    $result = mysqli_fetch_assoc($result);

    if ($result) {
        afterLogin($result['id'], $connect);
        setResponse(false, RESULT_SUCCESS);
    } else {
        setResponse('Wrong Username Or Password', RESULT_ERROR);
    }
} else {
    setResponse('Not valid Username Or Password', RESULT_ERROR);
}

function setResponse($message, $result ) {
    echo json_encode([
        'result' => $result,
        'message' => $message,
    ]);
}

function afterLogin($id, $connect) {
    getGuestCart($_SESSION['userId'], $id, $connect);
    $_SESSION['userId'] = $id;
    $_SESSION['isGuest'] = false;
    $_SESSION['modalShow'] = false;
}