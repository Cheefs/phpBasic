<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Gallery</title>
</head>
<body>
    <div>
        <h1 class="text_center"> Загрузить изображение в галерею </h1>
        <form class="load__form text_center" enctype="multipart/form-data" action="upload.php" method="POST">
            <input type="file" name="image">
            <button type="submit"> Загрузить </button>
        </form>
    </div>
    <h1 class="text_center"> Картинки которые открываются в новом окне </h1>
    <div class="photo-block">
        <?php  foreach ($images as $image): ?>
            <?php if (!is_dir($image)) : $imgPath = IMG_DIR.DIRECTORY_SEPARATOR.$image; ?>
                <a href="<?= $imgPath ?>" class="product__photo">
                    <img data-id ="0" class="photo__img" src="<?= $imgPath ?>" alt="cat1">
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <hr>
    <h1 class="text_center"> Картинки который открываются в модальном окне </h1>
    <div id="photo" class="photo-block">
        <form id="modalForm" class="photo-block" action="index.php" method="post">
            <?php  foreach ($images as $image): ?>
                <?php if (!is_dir($image)) :  $imgPath = IMG_DIR.DIRECTORY_SEPARATOR.$image; ?>
                    <div class="product__photo">
                        <img class="photo__img modal" src="<?= $imgPath ?>" alt="cat1">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <input class="modal_input hide" type="text" name="modal_image">
        </form>
    </div>
    <script src="scripts/js/script.js"></script>
</body>
</html>
