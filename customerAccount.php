<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>Browse</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section id="adminList">
      <div class="header-top">
         <div class="container ">
            <div class="row">
               <div class="col-sm-12">
                  <h2 class="title text-center ">Customer Account Page</h2>
               </div>
            </div>
         </div>
      </div>
      <br />
      <section>
         <div class="container">
         <div class="col-sm-12 padding-right">
            <div class="features_items">
               <!--features_items-->
               <div class='col-sm-4'>
                  <div class='product-image-wrapper'>
                     <div class='single-products'>
                        <div class='product-details text-center'>
                           <a href="./shop.php?search_string=night"><img src="http://sfsuswe.com/~s16g07/PHP/get.php?id=300&type=thumbnail" alt="Night photos" style="width:255px;height:250px;" /></a>
                           <h3 class='category-title'>Night</h3>
                           <h5>Purchase Date: 4/15/2016</h5>
                        </div>
                     </div>
                  </div>
               </div>
               <div class='col-sm-4'>
                  <div class='product-image-wrapper'>
                     <div class='single-products'>
                        <div class='product-details text-center'>
                           <a href="./shop.php?search_string=flower"><img src="http://sfsuswe.com/~s16g07/PHP/get.php?id=292&type=thumbnail" alt="Flower photos" style="width:255px;height:250px;" /></a>
                           <h3 class='category-title'>Flower</h3>
                           <h5>Purchase Date: 4/15/2016</h5>
                        </div>
                     </div>
                  </div>
               </div>
               <div class='col-sm-4'>
                  <div class='product-image-wrapper'>
                     <div class='single-products'>
                        <div class='product-details text-center'>
                           <a href="./shop.php?search_string=mountain"><img src="http://sfsuswe.com/~s16g07/PHP/get.php?id=291&type=thumbnail" alt="Mountain photos" style="width:255px;height:250px;" /></a>
                           <h3 class='category-title'>Mountains</h3>
                           <h5>Purchase Date: 4/15/2016</h5>
                        </div>
                     </div>
                  </div>
               </div>
               <br/>
            </div>
            <!--features_items-->
         </div>
         <!--                    <div class="col-sm-3">
            <div class="price-range">
                <h2>Price Range</h2>
                <div class="well">
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                    <b>$ 0</b> <b class="pull-right">$ 600</b>
                </div>
            </div>
            </div>-->
      </section>
      <?php include './includes/footer.php';?>
      <script src="js/jquery.js"></script>
      <script src="js/price-range.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>