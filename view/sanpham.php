<!DOCTYPE html>

<?php
  include '../view/lock/header.php';
  include '../view/lock/menus.php';
 ?>


<div class="darker-stripe">
<div class="container">
<div class="row">
<div class="span12">
<ul class="breadcrumb">
<li>
<a href="index-2.html"></a>
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



<div class="underlined push-down-20">
<div class="row">
<div class="span6">
<h3><span class="light"></span>Sản phẩm</h3>
</div>
<div class="span6">
<div class="form-inline sorting-by">
<label for="isotopeSorting" class="black-clr">Sort:</label>
<select id="isotopeSorting" class="span3">
<option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
<option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
<option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
<option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
<option value='{"sortBy":"popularity", "sortAscending":"true"}'>By Popularity (Low to High) &uarr;</option>
<option value='{"sortBy":"popularity", "sortAscending":"false"}'>By Popularity (High to Low) &darr;</option>
</select>
<label for="numberShown" class="black-clr">Show:</label>
<select id="numberShown" class="span1">
<option value="9">9</option>
<option value="15">15</option>
<option value="30">30</option>
</select>
</div>
</div>
</div>
</div>



<div class="row popup-products">
<div id="isotopeContainer" class="isotope-container">

<?php
$dssp = new product();
if(isset($_GET['idbrand'])){
	$brand = $dssp->getProducByBrand($_GET['idbrand'],$_GET['typeId']);
}else{
	$brand = $dssp->getList();
}
foreach($brand as $product){
?>

<div class="span3 isotope--target filter--accessories" data-price="75" data-popularity="2" data-size="xs|l|xl|xxl" data-color="orange" data-brand="nike">
	<form action='usercontroller.php' method='post'>
	<input type='hidden' name='action' value='add_cart'/>
	<div class="product">
		<div class="product-inner">
			<div class="product-img">
				<div class="picture">
					<a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/<?php echo $product['ProductImage']; ?>"/></a>
					<div class="img-overlay">
						<a class="btn more btn-primary"
						href="usercontroller.php?action=product-detail&proid=<?php echo $product['ProductID']; ?>&idbrand=<?php echo $product['IdBrand']; ?>&typeId=<?php echo $product['TypeId']; ?>">CHI TIÊT</a>
						
						<input type="hidden" name='productkey' value="<?php echo $product['ProductID']; ?>" ; ?>

                                <select name='itemqty'>
                                          <?php
                                            for ($i=1; $i<=10;$i++):
                                           echo "<option value='".$i ."'>";
                                             echo $i;
                                            echo "</option>";
                                             endfor;
                                             ?>
                                        </select>

            <!-- <a class="btn buy btn-danger" type ='submit' value='add_cart' name="action" href="#">Add to Cart</a> -->
                                <input class="btn buy btn-danger" type="submit" value="đặt hàng">
					</div>
				</div>
			</div>
			<div class="main-titles no-margin">
				<h4 class="title"  style="text-align: center; color: red;"><?php echo number_format($product['ProductPrice'], 0, '', '.');?>đ</h4>
				<h5 class="no-margin isotope--title"  style="text-align: center;"><?php echo $product['ProductName']; ?></h5>
			</div>
			
		</div>
	</div>
</form>
</div>
<?php }?>



</div>
</div>
<hr/>



<div class="pagination pagination-centered">
	<ul>
		<li><a href="#" class="btn btn-primary"><span class="icon-chevron-left"></span></a></li>
		<li class="active"><a href="#">1</a></li>
		
		<li><a href="#" class="btn btn-primary"><span class="icon-chevron-right"></span></a></li>
	</ul>
</div>
</section>
</div>
</div>
</div>



<?php
include '../view/lock/footer.php';
?>
</body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/shop-no-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:43:09 GMT -->
</html>
