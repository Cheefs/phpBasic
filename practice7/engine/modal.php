<?php
session_start();

include "helpers/location.php";

if ($_SESSION['modalShow'] == true) {
    $_SESSION['modalShow'] = false;
    $_SESSION['message'] = null;
} else {
    $_SESSION['modalShow'] = true;
}
location('/index.php');


