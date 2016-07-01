
<?php
                             // Get products for selected category
      $r=new product();
       
      if(isset($_GET['category_id'])) {
                                $category_id = $_GET['category_id'];
                                $sanpham=$r-s>getlistbyid($category_id);
                            } else {
                                $sanpham=$r->getlist();
                                $category_id=1;
                                }
                            ?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Future Tech - Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="ProteusThemes"/> 
    

    </script> 
    <link href="../controller/stylesheets/bootstrap.css" rel="stylesheet"/>
    <link href="../controller/stylesheets/responsive.css" rel="stylesheet"/> 
    <link rel="stylesheet" href="../controller/js/rs-plugin/css/settings.css" type="text/css"/> 
    <link rel="stylesheet" href="../controller/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/> 
    <link rel="stylesheet" href="../controller/js/prettyphoto/css/prettyPhoto.css" type="text/css"/> 
    <link href="../controller/stylesheets/main.css" rel="stylesheet"/> 
    <link href="../controller/stylesheets/stylenew.css" rel="stylesheet"/> 
    <script src="../controller/js/modernizr.custom.56918.js"></script> 
    <link rel="apple-touch-icon-precomposed" sizes="144x115" href="../controller/images/apple-touch/icon.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x91" href="../controller/images/apple-touch/icon.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x58" href="../controller/images/apple-touch/icon.png"/>
    <link rel="apple-touch-icon-precomposed" href="../controller/images/apple-touch/icon.png"/>
    <link rel="shortcut icon" href="../controller/images/apple-touch/icon.png"/>
</head>
<body class=" checkout-page">
<div class="master-wrapper">
<div class="container">
<div class="row">
 
 
 
<section class="span12">
<div class="checkout-container">
<div class="row">
<div class="span10 offset1">
 
 
 
<header>
<div class="row">
<div class="span2">
<a href="index-2.html"><img src="images/logo-bw.png" alt="Webmarket Logo" width="48" height="48"/></a>
<?php 
  if(isset($_SESSION["\/m&coppy;admin"])){
    echo"<P style='margin-left:50px;margin-top:10px'>Xin chào <span style='color:blue'>".$_SESSION["\/m&coppy;admin"]."</span>
          <a href='usercontroller.php?action=logout' style='margin-left:10px'>Logout</a></p>";
  }
?>
</div>
<div class="span6">
<div class="center-align">
<h1><span class="light">Giỏ hàng của </span>
 <?php 
  if(isset($_SESSION["\/m&coppy;admin"])){
    echo $_SESSION["\/m&coppy;admin"];
  }
  else {
    echo "Khách hàng mới";
  }
?>

 </h1>
</div>
</div>
<div class="span2">
<div class="right-align">
<img src="images/buttons/security.jpg" alt="Security Sign" width="92" height="65"/>
</div>
</div>
</div>
</header>
 
 
 
<div class="checkout-steps">
<div class="clearfix">
<div class="step active">
<div class="step-badge">1</div>
Shopping Cart
</div>
<div class="step">
<div class="step-badge">2</div>
Confirm &amp; Pay
</div>
</div>
</div>  
 
 
<form action="" method="POST">
<input type="hidden" name="action" value="update_cart"/>
<table class="table table-items">
<thead>
<tr>
<th style="font-weight:bold; color:black" colspan="2">Sản phẩm</th>
<th><div  style="font-weight:bold; color:black" class="align-center">Số lượng</div></th>
<th><div  style="font-weight:bold; color:black  " class="align-right">Giá</div></th>
</tr>
</thead>
<tbody>
<?php if(!isset($_SESSION['cart']) || count($_SESSION['cart'])== 0 ): ?>
<tr>
<td colspan="2" rowspan="2">
<div class="alert alert-info">
<button data-dismiss="alert" class="close" type="button">×</button>
Chưa có  sản phẩm trong giỏ hàng <a href="usercontroller.php?action=product-list">Thêm sản phẩm</a>
</div>
</td>
</tr>
<?php else: ?>

<?php 
  foreach ($_SESSION['cart'] as $key =>$item):
   $cost = number_format($item['cost'],2);
    $total = number_format($item['total'],2);
?>
<tr>
<td class="image"><img src="images/dummy/products/<?php echo $item['img'] ?>" alt="" width="124" height="124"/></td>
<td class="desc"><?php echo $item['name'];?> &nbsp; <a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
<td class="qty">
<input type="text" class="tiny-size" name ="newqty[<?php echo $key; ?>]" value="<?php echo $item['qty']; ?>"/>
</td>
<td class="price">
<?php echo $cost ?>
</td>
</tr>
<?php endforeach; ?>

<tr>
<td class="stronger">Tổng tiền:</td>
<td class="stronger">
<div style="color:red" class="size-16 align-right">
<?php 
  $n=new gio_hang();
  $t=$n->get_subtotal();
  echo $t; ?>
</div></td>
<td class="stronger">
<div class="size-16">
<a style="margin-left:30px; width:100px" href="usercontroller.php?action=product-list" class="btn btn-primary">Thêm sản phẩm</a>
</div>
</td>
<td class="stronger">
<div class="size-16 align-right">
<input class="btn btn-primary" type="submit" value="Cập nhật"/>
</div>
</td>
</tr>
</tbody>
</table>

<hr/>
<p class="right-align">
<a href="usercontroller.php?action=empty_cart" class="btn btn-primary higher bold">Empty Cart</a>
<a href="usercontroller.php?action=order" class="btn btn-primary higher bold">Thanh Toán</a>
</p>
</form>
<?php endif; ?>
</div>
</div>
</div>
</section>  
</div>
</div>  
</div>  
 
 
 
 
<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../../connect.facebook.net/en_US/all.html#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
 
<script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.html"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>
 
<script src="js/underscore/underscore-min.js" type="text/javascript"></script>
 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
 
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
 
<script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>
 
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
 
<script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>
 
<script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>
 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
<script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>
 
<script src="js/custom.js" type="text/javascript"></script>
</body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:42:43 GMT -->
</html>
