<?php
   if(!isset($_SESSION["\/m&coppy;admin"]) && ($_SESSION["\/m&coppy;admin"]=='admin')){ 
        header("Location:admincontroller.php?action=admin");
    }
    ?>
<!doctype html>
<html>
    
    <?php
    include '../view/lock/header.php';
    include '../view/lock/menus.php';

    ?>
    <link href="stylesheets/table.css" rel="stylesheet">
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
        
            <h2>Thêm sản phẩm</h2>
            <section class="contact-form-container">
                <form method="post" action="admincontroller.php" enctype="multipart/form-data">
                <table style="margin-top:50px">
                <input type='hidden' name='action' value='add_pro'/>
                <tr>
                <td><label>Tên sản phẩm : </label></td>
                <td><input type="text" name="proname" required></td> 
                </tr>
                <tr>                              
                <td><label>Giá : </label></td>
                <td><input type="text" name="price" required></td>
                </tr>
                <tr>
                <td><label>Loại : </label></td>
                <td><select name="typeid" class="frm-field" required>   
                        <option value="">Select...</option> 
                        <option value="1">SmartPhone</option>   
                        <option value="2">Tablet</option>
                        <option value="3">Laptop</option>
                        <option value="4">Phụ kiện</option>
                </select></td>
                </tr>
                <tr>
                <td><label>Hãng : </label></td>
                <td><select name="idbrand" class="frm-field" required>
                        <option value="">Select...</option>
                        <option value="3">Sony</option>   
                        <option value="1">Apple</option>
                        <option value="2">Samsung</option>
                        <option value="5">Blackberry</option>
                        <option value="4">HTC</option>
                </select></td>
                </tr>
                <tr>
                <td><label>Hình ảnh : </label></td>
                <td><input id="file" type="file" name="img" value="" required/></td>
                </tr>
                <tr>
                <td><label>Giới thiệu sản phẩm : </label></td>
                <td><textarea class="input-block-level" rows="7" cols="70" name="intro" placeholder="Your Text here ..." required></textarea></td>
                </tr>
                <tr>
                <td></td>
                <td><button class="btn btn-primary bold" type="submit">Thêm</button></td>
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
