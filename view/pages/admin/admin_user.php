<?php
if(isset($_SESSION["\/m&coppy;admin"])){
    echo "trang quan ly ";
}
else{
    header("Location:usercontroller.php?action=product-list");
}
?>
