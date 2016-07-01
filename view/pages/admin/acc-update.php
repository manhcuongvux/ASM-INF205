<?php
   if(!isset($_SESSION["\/m&coppy;admin"]) && ($_SESSION["\/m&coppy;admin"]=='admin')){ 
        header("Location:admincontroller.php?action=admin");
    }
    ?>
<!doctype html>
<html>
    <?php
    $objQuest = null;
    $objQuest = new user();
    $quest = $objQuest->getUserById($_GET['userid']);
    $userid = $quest[0];
    $username = $quest[1];
    $pass = $quest[2];
    $fullname = $quest[3];
    $email = $quest[4];
    $address = $quest[5];
    $phone = $quest[6];
    include '../view/lock/header.php';
    include '../view/lock/menus.php';
    ?>
<link href="stylesheets/table.css" rel="stylesheet">
<div class="darker-stripe"><div class="container"><div class="row"><div class="span12">
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
</div></div></div></div>
<div class="container">
<div class="push-up blocks-spacer">
<h2>Chỉnh sửa thông tin khách hàng</h2>
<div class="row" style="margin-top:50px">
<section class="span8">
    <div class="register_account">                
            <section class="contact-form-container">
                <form method="post" action="admincontroller.php" enctype="multipart/form-data">
                <input type='hidden' name='action' value='edit_acc'/>
                <table>
                <tr>
                <td><label>ID : </label></td>
                <td><input type="text" name="userid" value="<?php echo "$userid" ?>" readonly required></td> 
                </tr>
                <tr>
                <td><label>Username : </label></td>
                <td><input type="text" name="username" value="<?php echo "$username" ?>" required></td> 
                </tr>         
                <tr>                              
                <td><label>Password : </label></td>
                <td><input type="password" name="pass" value="<?php echo "$pass" ?>" readonly required></td>
                </tr>              
                <tr>
                <td><label>Fullname : </label></td>
                <td><input type="text" name="fullname" value="<?php echo "$fullname" ?>" required></td>
                </tr>               
                <tr>
                <td><label>Email : </label></td>
                <td><input type="email" name="email" value="<?php echo "$email" ?>" required></td>
                </tr>
                <tr>
                <td><label>Address : </label></td>
                <td><input type="text" name="address" value="<?php echo "$address" ?>" required></td>
                </tr>               
                <tr>
                <td><label>Phone : </label></td>
                <td><input type="number" name="phone" value="<?php echo "$phone" ?>" required/></td>
                </tr>
                <tr>
                <td></td>
                <td><button class="btn btn-primary bold" type="submit">Cập nhật</button></td>
                </tr>
              </table>  
            </form>
</section>
        </div>
</section>
</div></div></div>
    <?php
    include '../view/lock/footer.php';
    ?>
</body>
</html>
