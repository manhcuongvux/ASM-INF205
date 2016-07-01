<?php

session_start();

include '../model/connect.php';
include '../model/product.php';
include '../model/user.php';
include '../model/prodetail.php';
include '../model/hoadon.php';
include '../model/card.php';

if (isset($_POST["action"]))
    $action = $_POST["action"];
elseif (isset($_GET["action"]))
    $action = $_GET["action"];
else
    $action = "home";

switch ($action) {
    case "home":
        include '../view/home.php';
        break;

    case "contact" :
        include '../view/lienhe.php';
        break;
        
    case "product-list":
        include '../view/sanpham.php';
        break;
    case "acc_login_form":
        session_destroy();
        include '../view/acc_login.php';
        break;
    case "register_form":
        include '../view/register.php';
        break;
    case "product-detail":
       include '../view/product_detail.php';
       break;
    

    case "register":

        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];


        $add = new user(Null, $username, $pass, $fullname, $email, $address, $phone);
        $result = $add->register();
        header("location:?action=acc_login_form");
        break;

    case "add_cart":

        $key=$_POST['productkey'];
        $itemqty=$_POST['itemqty'];
        $add=new gio_hang();
        $add_tem=$add->add_item($key, $itemqty);
        include '../view/thanhtoan1.php';
        break; 
    case "update_cart":
        $new_list = $_POST['newqty'];
        foreach ($new_list as $key => $qty) { 
            if ($_SESSION['cart'][$key] != $qty) {
                $u=new gio_hang();
                $r=$u->update_item($key, $qty);
            }
        }
        include '../view/thanhtoan1.php';
        break;
    case "empty_cart":
        unset($_SESSION['cart']);
        include '../view/thanhtoan1.php';
        break;
    case 'order':

        if (!isset($_SESSION['\/m&coppy;admin'])) {
            echo '<script> alert("Ban phai dang nhap moi duoc thanh toan!");</script>';
            include '../view/accountlogin.php';
        } else {
            $h = new hoadon();
           $OrderID = $h->CreateHD($_SESSION['\/m&coppy;admin'][1]);
            ($_SESSION['OrderID'] = $OrderID);
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $r= $h->insertChiTietHD($OrderID, $key, $item['cost'], $item['qty'], $item['total']);
                $total+=$item['total'];
            }
            $h->updateTongHD($OrderID, $total);
            include '../view/thanhtoan2.php';
            
        }
        break;

}
?>
