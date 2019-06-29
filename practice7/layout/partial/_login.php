
<div class="account__control">
    <a href="/engine/login/login.php" class="my-account-btn"><?= $_SESSION['isGuest']? 'Login' : 'My Account' ?></a>
    <a href="/engine/logout.php" class="fas fa-sign-out-alt btn-logout <?= $_SESSION['isGuest']? 'hide' : '' ?>"></a>
</div>
