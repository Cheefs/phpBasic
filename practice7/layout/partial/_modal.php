
<div class="modal__container">
    <?php if ( !$_SESSION['message'] && $_SESSION['isGuest'] && $_SESSION['modalShow'] && !$_SESSION['isError']): ?>
        <div id="modalWindow" class="modal">
            <div class="modal-content modal_open">
                <div class="modal_login">
                    <div class="modal__header">
                        <h3 class="header_text">LOGIN</h3>
                        <a href="/engine/modal.php" class="close">&times;</a>
                    </div>
                    <div class="modal__body">
                        <div class="login__block">
                            <form action="/engine/login/auth.php" method="post" class="login-form my__account">
                                <div class="input-block">
                                    <label class="input-block-label" for="username">USERNAME</label>
                                    <input class="input-block-input" name="username" type="text" id="username">
                                    <label class="input-block-label" for="password">PASSWORD</label>
                                    <input class="input-block-input" name="password" type="password" id="password">
                                </div>
                                <div class="help-block"></div>
                                <div class="buttons">
                                    <button type="submit" class="btn btn-login">Log in</button>
                                    <a href="#" class="forgot-psswd">Forgot Password ?</a>
                                </div>
                                <h5 class="form-h5">Dont have account? <span class="register_link">click to Register</span></h5>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal_register hide">
                    <div class="modal__header">
                        <h3 class="header_text">LOGIN</h3>
                        <a href="/engine/modal.php" class="close">&times;</a>
                    </div>
                    <div class="modal__body">
                        <form action="/engine/register.php" method="post" class="login-form register my__account">
                            <div class="input-block">
                                <label class="input-block-label" for="usernameRegister">USERNAME<span class="label-span">*</span></label>
                                <input class="input-block-input"  name="username" type="text" id="usernameRegister" required>

                                <label class="input-block-label" for="passwordRegister">PASSWORD<span class="label-span">*</span></label>
                                <input class="input-block-input" name="password" type="password" id="passwordRegister" required>

                                <label class="input-block-label" for="email-addresRegister">EMAIL ADDRESS<span class="label-span">*</span></label>
                                <input class="input-block-input" name="email" type="email" id="email-addresRegister">
                                <label class="input-block-label" for="nameInput">Name</label>
                                <input class="input-block-input" name="name" type="text" id="nameInput">
                            </div>
                            <div class="required-info">* Required Fileds</div>
                            <div class="buttons">
                                <button type="submit" class="btn btn_register">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>

        <div id="modalHelp" class="modal hide">
            <div class="modal-content modal__help modal_open">
                <div class="modal__header">
                    <h3 class="header_text"></h3>
                    <span class="close">&times;</span>
                </div>
                <div class="modal__body">
                    <p class="info_text"></p>
                </div>
                <div class="modal__footer">
                    <div  class="modal__btn btn_confirm">OK</div>
                </div>
            </div>
        </div>
</div>
