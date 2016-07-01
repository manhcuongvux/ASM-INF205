
<!doctype html>
<html>
    <?php
    
    include '../view/lock/header.php';
    include '../view/lock/menus.php';

    ?>
<div class="darker-stripe">
<div class="container">
<div class="row">
<div class="span12">

</div>
</div>
</div>
</div>
<div class="container">
<div class="push-up blocks-spacer">
<div class="row">
<section class="span12">

    <div class="register_account">
        
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="loginModalLabel"><span class="light">Đăng nhập</span> Tài khoản</h3>
        </div>

        <div class="modal-body" style="width:300px; margin:auto">

            <form method="post" action="admincontroller.php?action=login">

            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmail">Tên đăng nhập</label>
                <div class="controls">
                <input type="text" class="input-block-level" id="inputEmail" name = "username" placeholder="Tên đăng nhập" required>
            </div>
            </div>

            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPassword">Mật khẩu</label>

                <div class="controls">
                    <input type="password" class="input-block-level" id="inputPassword" name = "password" placeholder="Mật khẩu" required>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    
                </div>
            </div>

            <button type="submit" class="btn btn-primary input-block-level bold higher">
            ĐĂNG NHẬP
            </button>
            </form>

        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="usercontroller.php?action=register_form" data-dismiss="modal">Đăng ký</a>
        </p>
        </div>
        </div>
    


</section>
</div>
</div>
</div>

    <?php
    include '../view/lock/footer.php';
    ?>


</body>
</html>
