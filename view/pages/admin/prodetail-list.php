<?php
   if(!isset($_SESSION["\/m&coppy;admin"]) && ($_SESSION["\/m&coppy;admin"]=='admin')){ 
        header("Location:admincontroller.php?action=admin");
    }
    ?>

<!DOCTYPE html>
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


    <form class="list">
        <h2>Danh sách chi tiết sản phẩm</h2>
        
        <table>
            <tr class="manage1">
                <td>ID</td>
                <td>Tên sản phẩm</td>
                <td>Pin</td>
                <td>Hệ điều hành</td>
                <td>Ram</td>
                <td>Bộ nhớ trong</td>
                <td>Độ phân giải</td>
                <td>Màn hình</td>
                <td>Camera</td>
                <td>NFC</td>
                <td>Wifi</td>
                <td>Networks</td>
                <td>Cập nhật</td>
            </tr>
            
            <?php
                $detail = new prodetail();
                $result = $detail->getList();
                foreach ($result as $set){
            ?>
                <tr>
                    <td><?php echo $set['ProductID']; ?></td>
                    <td><?php echo $set['ProductName']; ?></td>
                    <td><?php echo $set['BatteryCapacity']; ?></td>
                    <td><?php echo $set['Os']; ?></td>
                    <td><?php echo $set['Ram']; ?></td>
                    <td><?php echo $set['InterialMemorize']; ?></td>
                    <td><?php echo $set['Resolution']; ?></td>
                    <td><?php echo $set['ScreenSize']; ?></td>
                    <td><?php echo $set['Camera']; ?></td>
                    <td><?php echo $set['NFC']; ?></td>
                    <td><?php echo $set['Wifi']; ?></td>
                    <td><?php echo $set['Networks']; ?></td>
                    <td>
                    <a href="admincontroller.php?action=update_prodetail_form&proid=<?php echo $set['ProductID']; ?>">
                    <img width="32" height="32" src="images/buttons/update.png" alt=""/>
                    </a>
                    </td>

                </tr>
            <?php } ?>


        </table>
    </form>


</section>
</div>
</div>
</div>



<?php
include '../view/lock/footer.php';
?>
</body>
</html>
