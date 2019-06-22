<?php

const MAX_SIZE = 2000000;
const MIN_SIZE = 10000;
const IMG_DIR = 'images';
const IMAGES_DIST = __DIR__.DIRECTORY_SEPARATOR.IMG_DIR;

$uploadedFile = $_FILES['image'];

$newFile = IMAGES_DIST.DIRECTORY_SEPARATOR. basename($uploadedFile['name']);
$tmp_name = $_FILES["images"]["tmp_name"];
$name = basename($uploadedFile["name"]);

if ( $uploadedFile['size'] >= MIN_SIZE && $uploadedFile['size'] <= MAX_SIZE && ($uploadedFile['type'] === 'image/jpeg' || $uploadedFile['type'] === 'image/png'))  {
    move_uploaded_file($uploadedFile['tmp_name'], IMAGES_DIST.DIRECTORY_SEPARATOR.$name );
    header("location: index.php");
    exit();
} else {
    require_once '_partial/upload-warning.php';
}
