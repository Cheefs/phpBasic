<?php

require_once 'config/init.php';
const IMG_DIR = '/images';

$id = $_GET['id'];
if ( !is_null($id) && is_numeric($id)) {
    $connect = mysqli_connect('localhost','root', '', 'default','3306');
    $select = "SELECT * FROM `default`.galery g WHERE id = $id";
    $result = mysqli_query($connect, $select);
    if ($result) {
        $result = mysqli_fetch_assoc($result);
        if (!is_null($result) && is_array($result) && count($result) > 0) {
            $views = $result['views'] + 1;
            $update = "UPDATE `default`.galery g SET g.views = $views WHERE id = $id";
            $update = mysqli_query($connect, $update);
            mysqli_close($connect);
        }
    }
} else {
    header ('Location: index.php');  // перенаправление на нужную страницу
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="flex center">
        <img src="<?= IMG_DIR.'/'.$result['name'] ?>" alt="img">
        <div class="text_bold">
            <span><?= 'Total Views: '?></span>
            <span class="text_marked"><?= $views ?></span>
        </div>

    </div>
</body>
</html>


