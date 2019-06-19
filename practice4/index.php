<?php

/** 1. Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит
 *    все картинки в уменьшенном виде и форму для загрузки нового изображения. При клике на фотографию она должна
 *    открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.
 *    При загрузке изображения необходимо делать проверку на тип и размер файла.
 *
 * 2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями.
 *      Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
 *
 * 3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
 *  (материал в помощь: https://www.internet-technologies.ru/articles/sozdaem-prostoe-modalnoe-okno-s-pomoschyu-jquery.html)
 *
 */

const IMG_DIR = 'images';
const IMAGES_DIST = __DIR__.DIRECTORY_SEPARATOR.IMG_DIR;

try {
    $modalImage = (isset($_POST['modal_image']) && trim($_POST['modal_image']) !== '' )? $_POST['modal_image'] : null;
    $images = scandir(IMAGES_DIST);
    require_once '_partial/modal.php';
    require_once 'gallery.php';
} catch (Exception $ex) {
    echo 'Failed to load page';
}
