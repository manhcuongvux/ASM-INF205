<?php

session_start();

include '../model/connect.php';
include '../model/product.php';
include '../model/user.php';
include '../model/prodetail.php';


if (isset($_POST["action"]))
    $action = $_POST["action"];
elseif (isset($_GET["action"]))
    $action = $_GET["action"];
else
    $action = "admin";

switch ($action) {
    case "admin":
        if (isset($_SESSION["\/m&coppy;admin"]) && ($_SESSION["\/m&coppy;admin"]=='admin')) {
            include ("../view/pages/admin/pro-list.php");
        } else {
            session_destroy();
            include '../view/accountlogin.php';
        }
        break;

    //dssp 
    case "dssp":
        include '../view/sanpham.php';
        break;
    // product
    case "list_pro":
        include '../view/pages/admin/pro-list.php';
        break;
    case "add_pro_form":
        include '../view/pages/admin/pro-add.php';
        break;
    case "update_pro_form":
        include '../view/pages/admin/pro-update.php';
        break;
    // user
    case "list_user":
        include '../view/pages/admin/acc-list.php';
        break;
    case "add_acc_form":
        include '../view/pages/admin/acc-add.php';
        break;
    case "update_acc_form":
        include '../view/pages/admin/acc-update.php';
        break;
    // prodetail
    case "list_prodetail":
        include '../view/pages/admin/prodetail-list.php';
        break;
    case "add_prodetail_form":
        include '../view/pages/admin/prodetail-add.php';
        break;
    case "update_prodetail_form":
        include '../view/pages/admin/prodetail-update.php';
        break;
    
// add product
    case "add_pro":
        $path = getcwd() . DIRECTORY_SEPARATOR . 'images/dummy/products';


        if (isset($_FILES['img'])) {
            $filename = $_FILES['img']['name'];
            if (empty($filename)) {
                break;
            }
            $source = $_FILES['img']['tmp_name'];
            $target = $path . DIRECTORY_SEPARATOR . $filename;
            move_uploaded_file($source, $target);
        }


        $proname = $_POST['proname'];
        $price = $_POST['price'];
        $typeid = $_POST['typeid'];
        $intro = $_POST['intro'];
        $idbrand = $_POST['idbrand'];
        $img = $filename;

        $add = new product(Null, $proname, $img, $price, $intro, $typeid, $idbrand);
        $result = $add->Addpro();
        header("location:?action=list_pro");
        break;

// update product
    case "edit_pro":
         $path = getcwd() . DIRECTORY_SEPARATOR . 'images/dummy/products';

        if (isset($_FILES['img'])) {
            $filename = $_FILES['img']['name'];
            if (empty($filename)) {
            ;
            }
            $source = $_FILES['img']['tmp_name'];
            $target = $path . DIRECTORY_SEPARATOR . $filename;
            move_uploaded_file($source, $target);
        }
        $proid = $_POST['proid'];
        $proname = $_POST['proname'];
        $price = $_POST['price'];
        $typeid = $_POST['typeid'];
        $intro = $_POST['intro'];
        $idbrand = $_POST['idbrand'];
        $img = $filename;

        $edit = new product();
        $result = $edit->Editpro($proname, $img, $price, $intro, $typeid, $idbrand, $proid);
        header("location:?action=list_pro");
        break;

// delete product
    case "del_pro":
        $proid = $_GET['proid'];

        $del = new product($proid, Null, Null, Null, Null, Null, Null);
        $result = $del->Deletepro();
        header("location:?action=list_pro");
        break;


// add prodetail
    case "add_prodetail":
        
        $proid = $_POST['proid'];
        $pin = $_POST['pin'];
        $hdh = $_POST['hdh'];
        $ram = $_POST['ram'];
        $memory = $_POST['memory'];
        $dopg = $_POST['dopg'];
        $manhinh = $_POST['mh'];
        $cam = $_POST['cam'];
        $nfc = $_POST['nfc'];
        $wifi = $_POST['wifi'];
        $net = $_POST['net'];

        $add = new prodetail($proid, $pin, $hdh, $ram, $memory, $dopg, $manhinh, $cam, $nfc, $wifi, $net);
        $result = $add->Adddetail();
        header("location:?action=list_prodetail");
        break;

// update prodetail
    case "edit_prodetail":
         
        $proid = $_POST['proid'];
        $pin = $_POST['pin'];
        $hdh = $_POST['hdh'];
        $ram = $_POST['ram'];
        $memory = $_POST['memory'];
        $dopg = $_POST['dopg'];
        $manhinh = $_POST['mh'];
        $cam = $_POST['cam'];
        $nfc = $_POST['nfc'];
        $wifi = $_POST['wifi'];
        $net = $_POST['net'];

        $edit = new prodetail();
        $result = $edit->Editdetail($pin, $hdh, $ram, $memory, $dopg, $manhinh, $cam, $nfc, $wifi, $net, $proid);
        header("location:?action=list_prodetail");
        break;

// delete prodetail
    case "del_prodetail":
        $proid = $_GET['proid'];

        $del = new prodetail($proid, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null);
        $result = $del->Deletedetail();
        header("location:?action=list_prodetail");
        break;



// add customer
    case "add_acc":

        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];


        $add = new user(Null, $username, $pass, $fullname, $email, $address, $phone);
        $result = $add->register();
        header("location:?action=list_user");
        break;

// update customer
    case "edit_acc":
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $edit = new user();
        $result = $edit->edituser($username, $pass, $fullname, $email, $address, $phone, $userid);
        header("location:?action=list_user");
        break;

// delete customer
    case "del_acc":
        $userid = $_GET['userid'];
        $del = new user($userid, Null, Null, Null, Null, Null, Null);
        $result = $del->deleteuser();
        header("location:?action=list_user");
        break;


    // login  
    case "login":
        $User = $_POST["username"];
        $Pass = md5($_POST["password"]);
        $user= new user();
        $result = $user->login($User,$Pass);
        if($result[0] == 1){
            $_SESSION["\/m&coppy;admin"] = $result[1];
            
            header("location:?action=dssp");
        }else{
            echo "<script type='text/javascript'>
                    alert ('Tài khoản hoặc mật khẩu không đúng');
                    </script>";
            include '../view/accountlogin.php';
        }
        // $Id = $_POST["admin"];
        // $Pass = md5($_POST["password"]);
        // $ad = new admin();
        // $ar = $ad->login($Id, $Pass);
        // if ($ar[0] == 0) {
        //     echo "Login Failed";
        // } else if ($ar[0] == 1) {
        //     $_SESSION["\/m&coppy;admin"] = $ar[1];
        //     include ("../view/list_pro.php");
        // } else {
        //     include ("../view/admin_login.php");
        // }
        break;
    case "logout":
            $_SESSION = session_destroy();
            header("Location:usercontroller.php?action=product-list");
            break;
}
?>
