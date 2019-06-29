<?php
session_start();
if ($_SESSION['modalShow'] == true) {
    $_SESSION['modalShow'] = false;
} else {
    $_SESSION['modalShow'] = true;
}
header('Location: /index.php');
session_write_close();
exit();

