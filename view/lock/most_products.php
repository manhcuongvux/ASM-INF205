
<div class="most-popular blocks-spacer">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="main-titles lined">
          <h2 class="title"><span class="light">Sản phẩm </span>mới nhất</h2>
        </div>
      </div>
    </div>
    <div class="row popup-products">
<?php
$getProductNew = new product();
$result = $getProductNew->getProductNew();
foreach ($result as $product) {
    // echo "<pre>";
    // var_dump($result);
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
            <a class="btn more btn-primary" href="usercontroller.php?action=product-detail&proid=<?php echo $product['ProductID']; ?>&idbrand=<?php echo $product['IdBrand']; ?>&typeId=<?php echo $product['TypeId']; ?>">CHI TIẾT</a>
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
        <h4 class="title" style="text-align: center; color: red;"><?php  echo number_format($product['ProductPrice'], 0, '', '.');?>đ</h4>
        <h5 class="no-margin isotope--title" style="text-align: center;"><?php echo $product['ProductName']; ?></h5>
      </div>
      
    </div>
  </div>
  </form>
</div>
<?php } ?>

    </div>
  </div>
</div>
