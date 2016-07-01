<div class="navbar navbar-static-top" id="stickyNavbar">
<div class="navbar-inner">
<div class="container">
<div class="row">
<div class="span9">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>



<div class="nav-collapse collapse">
<ul class="nav" id="mainNavigation">
<li class="active">
<a href="usercontroller.php?action=home">HOME</a>
</li>

<?php
$getmenu = new product();
$result = $getmenu->getProductType();

$getBrand = $getmenu->getBrand();
?>
<?php foreach($result as $item_type){ ?>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle"><?php echo $item_type['TypeName']?><b class="caret"></b> </a>
		<ul class="dropdown-menu">
			<?php foreach($getBrand as $item){ ?>
				<li><a href="usercontroller.php?action=product-list&idbrand=<?php echo $item['IdBrand']?>&typeId=<?php echo $item_type['TypeId']?>"><?php echo $item['Brand']?></a></li>
				<?php } ?>
		</ul>
	</li>
<?php }?>

	<li>
		<a href="usercontroller.php?action=contact">CONTACT</a>
	</li>

<?php
if(isset($_SESSION["\/m&coppy;admin"]) && ($_SESSION["\/m&coppy;admin"]=='admin')){ ?>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle">Quản lý<b class="caret"></b> </a>
		<ul class="dropdown-menu">
			<li><a href="admincontroller.php?action=list_pro" class="dropdown-toggle"> Sản phẩm </a></li>
			<li><a href="admincontroller.php?action=list_prodetail" class="dropdown-toggle"> Chi tiết sản phẩm </a></li>
			<li><a href="admincontroller.php?action=list_user" class="dropdown-toggle"> Khách hàng </a></li>
		</ul>
	</li>
<?php }
?>




<form class="navbar-form pull-right" action="#" method="get">
	<button type="submit"><span class="icon-search"></span></button>
	<input type="text" class="span1" name="search" id="navSearchInput">
</form>
</div>
</div>




</div>
</div>
</div>
</div>
