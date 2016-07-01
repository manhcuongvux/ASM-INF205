<?php
class gio_hang {

   function add_item($key, $quantity) {
     $pro = new product();
    $pros = $pro->selectProductByID($key);
    if (isset($_SESSION['cart'][$key])) {
        $quantity +=$_SESSION['cart'][$key]['qty'];
        $this->update_item($key, $quantity);
        return;
    }
    $Ma_SP=$pros['ProductID'];
      $cost = $pros['ProductPrice'];
    $total = $cost * $quantity;
    $item = array(
        'name' => $pros['ProductName'],
        'img' => $pros['ProductImage'],
        'cost' => $cost,
        'qty' => $quantity,
        'total' => $total,
        'id' =>$Ma_SP
    );

    $_SESSION['cart'][$key] = $item;
}

function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if ($quantity <= 0) {
        unset($_SESSION['cart'][$key]);
    } else {
        $_SESSION['cart'][$key]['qty'] = $quantity;
        $total = $_SESSION['cart'][$key]['cost'] * $_SESSION['cart'][$key]['qty'];
        $_SESSION['cart'][$key]['total'] = $total;
    }
}

function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal = number_format($subtotal, 2);
    return $subtotal;
}
}
?>