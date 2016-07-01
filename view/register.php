
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
<ul class="breadcrumb">
<li>
<a href="index-2.html">Webmarket</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="shop.html">Shop</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="shop-no-sidebar.html">All Products (no sidebar)</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="container">
<div class="push-up blocks-spacer">
<div class="row">
<section class="span12">

    <div class="register_account">
        
            <h2>Đăng ký tài khoản</h2>
            <section class="contact-form-container" style="margin-top:30px">
                <form method="post" action="usercontroller.php">
                <input type='hidden' name='action' value='register'/>
                <table>
                <tr>
                <td><label>Username : </label></td>
                <td><input type="text" name="username" required></td> 
                </tr>
                
                <tr>                              
                <td><label>Password : </label></td>
                <td><input type="password" name="pass" required></td>
                </tr>
                
                <tr>
                <td><label>Fullname : </label></td>
                <td><input type="text" name="fullname" required></td>
                </tr>
               
                <tr>
                <td><label>Email : </label></td>
                <td><input type="email" name="email" required></td>
                </tr>

                <tr>
                <td><label>Address : </label></td>
                <td><input type="text" name="address" required></td>
                </tr>
                
                <tr>
                <td><label>Phone : </label></td>
                <td><input type="text" name="phone" required/></td>
                </tr>

                <tr>
                <td></td>
                <td><button class="btn btn-primary bold" type="submit">Đăng ký</button></td>
                </tr>
              </table>  
            </form>
</section>
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
