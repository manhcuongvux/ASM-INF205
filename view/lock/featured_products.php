<div class="row featured-items blocks-spacer">
  <div class="span12">
    <div class="main-titles lined">
      <h2 class="title"><span class="light">Sản Phẩm </span> Xem nhiều</h2>
      <div class="arrows"><a id="featuredItemsLeft" href="#" class="icon-chevron-left"></a><a id="featuredItemsRight" href="#" class="icon-chevron-right"></a></div>
    </div>
  </div>

  <div class="span12">
    <div data-autoplay="false" data-nav="featuredItems" class="carouFredSel">
      <div class="slide">
        <div class="row">

<?php
$getfeatureproduct = new product();
$result = $getfeatureproduct->getFeatureProduct();
foreach ($result as $product) {
?>
          <div class="span4">
            <div class="product">
              <div class="product-img featured">
                <div class="picture"><a href="product.html"><img src="images/dummy/products/<?php echo $product['ProductImage'];?>" alt="" width="518" height="358"/></a>
                  <div class="img-overlay">
                  <a href="usercontroller.php?action=product-detail&proid=<?php echo $product['ProductID']; ?>&idbrand=<?php echo $product['IdBrand']; ?>&typeId=<?php echo $product['TypeId']; ?>" class="btn more btn-primary">CHI TIÊT</a>
                  </div>
                </div>
              </div>
              <div class="main-titles">
                <h4 class="title" style="text-align: center; color: red;"><?php echo number_format($product['ProductPrice'], 0, '', '.');?></h4>
                <h5 class="no-margin" style="text-align: center;"><a href="product.html"><?php echo $product['ProductName'];?></a></h5>
              </div>
              <!-- <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p> -->
            </div>
          </div>

<?php } ?>


        </div>
      </div>
    </div>
  </div>
</div>
