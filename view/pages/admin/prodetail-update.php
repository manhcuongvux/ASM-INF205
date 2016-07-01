<?php
   if(!isset($_SESSION["\/m&coppy;admin"]) && ($_SESSION["\/m&coppy;admin"]=='admin')){ 
        header("Location:admincontroller.php?action=admin");
    }
    ?>

<!doctype html>
<html>
    <?php
    $objQuest = null;
    $objQuest = new prodetail();
    $quest = $objQuest->getProdetailById($_GET['proid']);
    $proid = $quest['ProductID'];
    $proname = $quest['ProductName'];
    $proimg = $quest['ProductImage'];
    $pin = $quest['BatteryCapacity'];
    $hdh = $quest['Os'];
    $ram = $quest['Ram'];
    $memory = $quest['InterialMemorize'];
    $dopg = $quest['Resolution'];
    $manhinh = $quest['ScreenSize'];
    $cam = $quest['Camera'];
    $nfc = $quest['NFC'];
    $wifi = $quest['Wifi'];
    $net = $quest['Networks'];


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
<h2>Chỉnh sửa sản phẩm</h2>
<div class="row" style="margin-top:30px">
<section class="span8">

    <div class="register_account">
        
            
            <section class="contact-form-container">
                <form method="post" action="admincontroller.php" enctype="multipart/form-data">
                <input type='hidden' name='action' value='edit_prodetail'/>
                <table style="margin-top:50px">
                <tr>
                <td><label>Sản phẩm : </label></td>
                <td><select name="proid" class="frm-field" required>   
                        <option value="<?php echo "$proid" ?>"><?php echo "$proname" ?></option>
                </select></td>
                <td style="width:40px"></td>                              
                <td style="width:90px"><label>Pin : </label></td>
                <td><input type="text" name="pin" value="<?php echo "$pin" ?>" required></td>
                </tr>

                <tr>
                <td><label>Hệ điều hành : </label></td>
                <td><input type="text" name="hdh" value="<?php echo "$hdh" ?>" required></td>
                <td></td>
                <td><label>Ram : </label></td>
                <td><input type="text" name="ram" value="<?php echo "$ram" ?>" required/></td>
                </tr>

                <tr>
                <td><label>Bộ nhớ trong : </label></td>
                <td><input type="text" name="memory" value="<?php echo "$memory" ?>" required/></td>
                <td></td>
                <td><label>Độ phân giải : </label></td>
                <td><input type="text" name="dopg" value="<?php echo "$dopg" ?>" required/></td>
                </tr>

                <tr>
                <td><label>Màn hình : </label></td>
                <td><input type="text" name="mh" value="<?php echo "$manhinh" ?>" required/></td>
                <td></td>
                <td><label>Camera : </label></td>
                <td><input type="text" name="cam" value="<?php echo "$cam" ?>" required/></td>
                </tr>

                <tr>
                <td><label>NFC : </label></td>
                 <td><select name="nfc" class="frm-field" required>   
                        <option value="<?php echo "$nfc" ?>"><?php echo "$nfc" ?></option>
                        <option value="yes">Có</option>
                        <option value="no">Không</option>   
                </select></td>
                <td></td>
                <td><label>Wifi : </label></td>
                <td><input type="text" name="wifi" value="<?php echo "$wifi" ?>" required/></td>
                </tr>

                <tr>
                <td><label>Networks : </label></td>
                <td><input type="text" name="net" value="<?php echo "$net" ?>" required/></td>
                <td></td>
                <td><button class="btn btn-primary bold" type="submit">Cập nhật</button></td>
                </tr>

              </table>  
            </form>
</section>
        </div>
    


</section>
<section class="span4">

    <img src="images/dummy/products/<?php echo "$proimg" ?>" width="400px"/>
</section>
</div>
</div>
</div>

    <?php
    include '../view/lock/footer.php';
    ?>


</body>
</html>
