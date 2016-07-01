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
<div class="container"><div class="push-up blocks-spacer"><div class="row">
<section class="span12">
    <form class="list">
        <h2>Danh sách khách hàng</h2>
        <article class="link">
        <a href="admincontroller.php?action=add_acc_form">Thêm mới</a>
    </article>
        <table>
            <tr class="manage1">
                <td>ID</td>
                <td>Username</td>
                <td>Password</td>
                <td>Họ tên khách hàng</td>
                <td>Email</td>
                <td>Địa chỉ</td>
                <td>Sđt</td>
                <td>Cập nhật</td>
                <td>Xóa</td>
            </tr>       
            <?php
                $dssp = new user();
                $result = $dssp->getList();
                while ($set = $result->fetch()):
            ?>
                <tr>
                    <td><?php echo $set['UserID']; ?></td>
                    <td><?php echo $set['Username']; ?></td>
                    <td><?php echo $set['Password']; ?>đ</td>
                    <td><?php echo $set['FullName']; ?></td>
                    <td><?php echo $set['Email']; ?></td>
                    <td><?php echo $set['Address']; ?></td>
                    <td><?php echo $set['Phone']; ?></td>
                    <td>
                    <a href="admincontroller.php?action=update_acc_form&userid=<?php echo $set['UserID']; ?>">
                    <img width="32" height="32" src="images/buttons/update.png" alt=""/></a>
                    </td>
                    <td>
                    <a href="admincontroller.php?action=del_acc&userid=<?php echo $set['UserID']; ?>">
                    <img width="32" height="32" src="images/buttons/delete.png" alt=""/></a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </form>
</section>
</div></div></div>
<?php
include '../view/lock/footer.php';
?>
</body>
</html>
