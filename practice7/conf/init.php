<?php

function dbConnect() {
    $dbConf = $_SERVER['DOCUMENT_ROOT'].'/conf/config.php';
    if (file_exists($dbConf)) {
        $config = require $dbConf;
        $mysqli = mysqli_connect(
            $config['db_host'],
            $config['db_user'],
            $config['db_pass'],
            $config['db_name']
        );
        return $mysqli;
    }
    return null;
}