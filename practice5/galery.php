<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Gallery</title>
</head>
<body>
    <form id="modalForm" class="photo-block" action="index.php" method="post">
        <?php  foreach (isset($images)? $images : [] as $image): ?>
            <a href="/view.php?id=<?= $image['id'] ?>" class="product__photo" >
                <img class="photo__img" src="<?= IMG_DIR.'/'.$image['name'] ?>" alt="<?= $image['name'] ?>">
            </a>
        <?php endforeach; ?>
        <input class="modal_input hide" type="text" name="modal_image">
    </form>
</body>
</html>
