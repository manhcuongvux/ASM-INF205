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
        
            <h2>Thêm chi tiết sản phẩm</h2>
            <section class="contact-form-container">
                <form method="post" action="admincontroller.php" enctype="multipart/form-data">
                <table style="margin-top:50px">
                <input type='hidden' name='action' value='add_prodetail'/>
                <tr>
                <td><label>Sản phẩm : </label></td>
                
                <td><select name="proid" class="frm-field" required>   
                        <option value="">Select...</option>
                <?php
                $idpro = new product();
                $result = $idpro->getList();
                foreach ($result as $set){
                ?> 
                        <option value="<?php echo $set['ProductID']; ?>"><?php echo $set['ProductName']; ?></option>   
                <?php } ?>
                </select></td>
                <td style="width:50px"></td>                              
                <td><label>Pin : </label></td>
                <td><input type="text" name="pin" required></td>
                </tr>

                <tr>
                <td><label>Hệ điều hành : </label></td>
                <td><select name="hdh" class="frm-field" required>   
                        <option value="">Select...</option> 
                        <option value="iOS">IOS</option>
                        <option value="Mac os">Mac OS</option>   
                        <option value="Android">Android</option>
                        <option value="Window">Window</option>
                        <option value="BB 10">BlackBerry</option>
                        <option value="None">Không</option>
                </select></td>
                <td></td>
                <td><label>Ram : </label></td>
                <td><input type="text" name="ram" value="" required/></td>
                </tr>

                <tr>
                <td><label>Bộ nhớ trong : </label></td>
                <td><input type="text" name="memory" value="" required/></td>
                <td></td>
                <td><label>Độ phân giải : </label></td>
                <td><input type="text" name="dopg" value="" required/></td>
                </tr>

                <tr>
                <td><label>Màn hình : </label></td>
                <td><input type="text" name="mh" value="" required/></td>
                <td></td>
                <td><label>Camera : </label></td>
                <td><input type="text" name="cam" value="" required/></td>
                </tr>

                <tr>
                <td><label>NFC : </label></td>
                 <td><select name="nfc" class="frm-field" required>   
                        <option value="">Select...</option> 
                        <option value="yes">Có</option>
                        <option value="no">Không</option>   
                </select></td>
                <td></td>
                <td><label>Wifi : </label></td>
                <td><input type="text" name="wifi" value="" required/></td>
                </tr>

                <tr>
                <td><label>Networks : </label></td>
                <td><input type="text" name="net" value="" required/></td>
                
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
