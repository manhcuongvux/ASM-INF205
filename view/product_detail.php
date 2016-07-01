<!DOCTYPE html>

<?php include 'lock/header.php' ?>
<body class="">
<div class="master-wrapper">
<?php include 'lock/menus.php' ?>

<?php
    $objQuest = null;
    $objQuest = new prodetail();
    $quest = $objQuest->getProdetailById($_GET['proid']);
    $proid = $quest['ProductID'];
    $proname = $quest['ProductName'];
    $proimg = $quest['ProductImage'];
    $price = $quest['ProductPrice'];
    $intro = $quest['ProductIntro'];
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
?>

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
<a href="#">Horsefeathers</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="product.html">Horsefeathers Shot Surfers T-shirt</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="container">
<div class="push-up top-equal blocks-spacer">

<div class="row blocks-spacer">

<div class="span5">
<div class="product-preview">
<div class="picture">
<img src="images/dummy/products/<?php echo $proimg ?>" alt="" width="940" height="940" id="mainPreviewImg"/>
</div>
<div class="thumbs clearfix">
<div class="thumb active">
<a href="#mainPreviewImg"><img src="images/dummy/products/<?php echo $proimg ?>" alt="" width="940" height="940"/></a>
</div>
</div>
</div>
</div>
 
 
 
<div class="span7">
<div class="product-title">
<h1 class="name"><span class="light"></span><?php echo $proname ?></h1>
<div class="meta">
<span class="tag"><?php echo $price ?>đ</span>
<span class="stock">
<!-- <span class="btn btn-success">In Stock</span>
<span class="btn btn-danger">Out of Stock</span>
<span class="btn btn-warning">Ask for availability</span> -->
</span>
</div>
</div>
<div class="product-description">
<p><?php echo $intro ?></p>
<hr/>
 <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1056592627704323',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

 <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
 </fb:login-button>


<div id="status">
</div>
 
 
<form action='usercontroller.php' method='post'>
<input type='hidden' name='action' value='add_cart'/>
<input type="hidden" name='productkey' value="<?php echo $proid; ?>" ; ?>

                                <select style="margin-top:11px" name='itemqty'>
                                          <?php
                                            for ($i=1; $i<=10;$i++):
                                           echo "<option value='".$i ."'>";
                                             echo $i;
                                            echo "</option>";
                                             endfor;
                                             ?>
                                        </select>

            <!-- <a class="btn buy btn-danger" type ='submit' value='add_cart' name="action" href="#">Add to Cart</a> -->
                                <input class="btn buy btn-danger higher bold" type="submit" value="ĐẶT HÀNG">
</form>
<hr/>
</div>
</div>
</div>
 
 
 
<div class="row">
<div class="span12">
<ul id="myTab" class="nav nav-tabs">
<li class="active">
<a href="#tab-1" data-toggle="tab">THÔNG SỐ KỸ THUẬT</a>
</li>
</ul>
<div class="tab-content">
<div class="fade in tab-pane active" id="tab-1">
<div class="table-responsive">
<table class="table">
<h3 style="width=100%; background-color:; margin-bottom: 27px">Thông số cơ bản</h3>
	<tr>
		<td>Màn hình : </td>
		<td><?php echo $manhinh ?></td>
	</tr>
	<tr>
		<td>Camera : </td>
		<td><?php echo $cam ?></td>
	</tr>
	<tr>
		<td>Bộ nhớ trong : </td>
		<td><?php echo $memory ?></td>
	</tr>
	<tr>
		<td>Hệ điều hành : </td>
		<td><?php echo $hdh ?></td>
	</tr>
	<tr>
		<td>Ram : </td>
		<td><?php echo $ram ?></td>
	</tr>
	<tr>
		<td>Pin : </td>
		<td><?php echo $pin ?></td>
	</tr>
	<tr>
		<td>Độ phân giải : </td>
		<td><?php echo $dopg ?></td>
	</tr>
	<tr>
		<td>NFC : </td>
		<td><?php echo $nfc ?></td>
	</tr>
	<tr>
		<td>Wifi : </td>
		<td><?php echo $wifi ?></td>
	</tr>
	<tr>
		<td>Networks : </td>
		<td><?php echo $net ?></td>
	</tr>
	<tr><td></td><td></td></tr>

</table>
</div>

</div>
</div>
</div>
</div>
 
 
 
 
<div class="boxed-area no-bottom">
<div class="container">
 
 
 
<div class="row">
<div class="span12">
<div class="main-titles lined">
<h2 class="title"><span class="light">SẢN PHẨM</span> CÙNG LOẠI</h2>
</div>
</div>
</div>
 
 <div class="row popup-products">
 <?php
$dssp = new product();
if(isset($_GET['idbrand'])){
	$brand = $dssp->getProducByBrand($_GET['idbrand'],$_GET['typeId']);
}else{
	$brand = $dssp->getList();
}
foreach($brand as $product){
?>



<div class="span3">
  <div class="product">
    <div class="product-inner">
      <div class="product-img">
      <div class="picture">
      <a href="product.html"><img src="images/dummy/products/<?php echo $product['ProductImage']; ?>" alt="" width="540" height="374"/></a>
      <div class="img-overlay">
      <a class="btn more btn-primary" href="usercontroller.php?action=product-detail&proid=<?php echo $product['ProductID']; ?>&idbrand=<?php echo $product['IdBrand']; ?>&typeId=<?php echo $product['TypeId']; ?>">CHI TIÊT</a>
      <!-- <a href="#" class="btn buy btn-danger">Add to Cart</a> -->
      </div>
      </div>
      </div>  
    <div class="main-titles no-margin">
    <h4 class="title" style="text-align: center; color: red"> <span class="red-clr"><?php echo $product['ProductPrice']; ?>đ</span></h4>
    <h5 class="no-margin" style="text-align: center"><?php echo $product['ProductName']; ?></h5>
    </div>
    <p class="center-align stars">
    <span class="icon-star stars-clr"></span>
    <span class="icon-star stars-clr"></span>
    <span class="icon-star stars-clr"></span>
    <span class="icon-star stars-clr"></span>
    <span class="icon-star"></span>
    </p>
    </div>
  </div>
</div>  

<?php }?>
</div>

</div>
</div>
 
 
 
<?php include 'lock/footer.php' ?>
</body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:43:12 GMT -->
</html>
