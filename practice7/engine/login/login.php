<?php
session_start();

if ($_SESSION['isGuest']) {
    $_SESSION['modalShow'] = true;
    $_SESSION['isError'] = false;
    header('Location: /index.php');
} else {
    header('Location: /my-account.php');
}

session_write_close();
exit();