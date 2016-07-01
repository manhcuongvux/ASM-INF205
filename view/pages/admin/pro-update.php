<?php
   if(!isset($_SESSION["\/m&coppy;admin"]) && ($_SESSION["\/m&coppy;admin"]=='admin')){ 
        header("Location:admincontroller.php?action=admin");
    }
    ?>
<!doctype html>
<html>
    <?php
    $objQuest = null;
    $objQuest = new product();
    $quest = $objQuest->getProductById($_GET['proid']);
    $proid = $quest['ProductID'];
    $proname = $quest['ProductName'];
    $img = $quest['ProductImage'];
    $price = $quest['ProductPrice'];
    $intro = $quest['ProductIntro'];
    $category = $quest['TypeName'];
    $brand = $quest['Brand'];
    $typeid = $quest['TypeId'];
    $idbrand = $quest['IdBrand'];
    include '../view/lock/header.php';
    include '../view/lock/menus.php';
    ?>
<link href="stylesheets/table.css" rel="stylesheet">
<div class="darker-stripe"><div class="container"><div class="row"><div class="span12">
<ul class="breadcrumb">
<li><a href="index-2.html">Webmarket</a></li>
<li><span class="icon-chevron-right"></span></li>
<li><a href="shop.html">Shop</a></li>
<li><span class="icon-chevron-right"></span></li>
<li><a href="shop-no-sidebar.html">All Products (no sidebar)</a></li>
</ul>
</div></div></div></div>
<div class="container">
<div class="push-up blocks-spacer">
<h2>Chỉnh sửa sản phẩm</h2>
<div class="row" style="margin-top:30px">
<section class="span7">
    <div class="register_account">   
            <section class="contact-form-container">
                <form method="post" action="admincontroller.php" enctype="multipart/form-data">
                <input type='hidden' name='action' value='edit_pro'/>
                <table style="margin-top:50px">  
                <tr>
                <td><label>ID sản phẩm : </label></td>
                <td><input type="text" name="proid" value="<?php echo "$proid" ?>" readonly required></td> 
                </tr>
                <tr>
                <td><label>Tên sản phẩm : </label></td>
                <td><input type="text" name="proname" value="<?php echo "$proname" ?>" required></td> 
                </tr> 
                <tr>                              
                <td><label>Giá : </label></td>
                <td><input type="text" name="price" value="<?php echo "$price" ?>" required></td>
                </tr>
                <tr>
                <td><label>Loại : </label></td>
                <td><select name="typeid" class="frm-field" required>
                        <option value="<?php echo "$typeid" ?>"><?php echo "$category" ?></option>    
                        <option value="1">SmartPhone</option>   
                        <option value="2">Tablet</option>
                        <option value="3">Laptop</option>
                        <option value="4">Phụ kiện</option>
                </select></td>
                </tr>
                <tr>
                <td><label>Hãng : </label></td>
                <td><select name="idbrand" class="frm-field" required>
                        <option value="<?php echo "$idbrand" ?>"><?php echo "$brand" ?></option>
                        <option value="3">Sony</option>   
                        <option value="1">Apple</option>
                        <option value="2">Samsung</option>
                        <option value="5">Blackberry</option>
                        <option value="4">HTC</option>
                </select></td>
                </tr>
                <tr>
                <td><label>Hình ảnh : </label></td>
                <td>
                <input id="file" type="file" name="img" value="" required/>
                </td>
                </tr>
                <tr>
                <td><label>Giới thiệu sản phẩm: </label></td>
                <td><textarea class="input-block-level" rows="7" cols="70" name="intro" placeholder="Your text here..." required><?php echo "$intro" ?></textarea></td>
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
<section class="span4">
    <img src="images/dummy/products/<?php echo "$img" ?>" width="400px"/>
</section>
</div></div></div>
    <?php
    include '../view/lock/footer.php';
    ?>
</body>
</html>
