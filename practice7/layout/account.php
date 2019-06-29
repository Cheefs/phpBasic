<?php if (isset($user) && !is_null($user)): ?>

<div class="container my-account">
    <div class="nav__panel">
        <div class="nav__element presonal active">PERSONAL INFO</div>
    </div>

    <div class="my-data_container">
        <div class="text text_center">
            <h2 class="text text_marked"><?= 'HELLO!!' ?></h2>
            <div>
                <span class="text">Your username is :</span>
                <span class="text text_marked"><?= $user['username']?></span>
            </div>

            <div>
                <span class="text">Your name is :</span>
                <span class="text text_marked"><?= $user['name']?></span>
            </div>
        </div>

    </div>
</div>

<?php else:
        header('Location: /index.php');
        exit();
    endif;
?>