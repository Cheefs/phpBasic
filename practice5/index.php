<?php

/**
    1. Создать галерею изображений, состоящую из двух страниц:
    просмотр всех фотографий (уменьшенных копий);
    просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
    2. В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
    3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
    4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности. Популярность = число кликов по фотографии.
*/

require_once 'config/init.php';
const IMG_DIR = '/images';

$connect = dbConnect();
if (!is_null($connect)) {
    $query = "SELECT * FROM `default`.galery g ORDER BY g.views DESC;";
    $result = mysqli_query($connect, $query);

    if ($result){
        $images = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $images[] = $row;
        }
        if (count($images) > 0) {
            require 'galery.php';
        }
    }
    mysqli_close($connect);
} else {
    return 'NO DB CONNECTION PLEASE TRY AGAIN LETTER';
}


