<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>Browse</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section id="search-box" >
         <!--search-box-->
         <div class="container">
            <div id="searchbar">
               <form id="search-form" action="./shop.php" method="GET" enctype="multipart/form-data">
                  <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-2">
                     <div class="input-group input-group-lg">
                        <input id="searchbox" class="form-control" type="text" placeholder="Search for Images" name="search_string">
                        <span class="input-group-btn">
                        <button id="search-button" type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                        </span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--/searchbox-->
      <br />
      <section>
         <div class="container">
         <div class="col-sm-12 padding-right">
            <div class="features_items">
               <!--features_items-->
               <h2 class="title text-center">Browse by Category</h2>
               <h3 class='title'>Popular Categories</h3>
               <div class='col-sm-4'>
                  <div class='product-image-wrapper'>
                     <div class='single-products'>
                        <div class='product-details text-center'>
                           <a href="./shop.php?search_string=night"><img src="http://sfsuswe.com/~s16g07/PHP/get.php?id=300&type=thumbnail" alt="Night photos" style="width:255px;height:250px;" /></a>
                           <h3 class='category-title'>Night</h3>
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
                        </div>
                     </div>
                  </div>
               </div>
               <br/>
            </div>
            <!--features_items-->
         </div>
         <div class="row">
         <div class="col-sm-4 col-sm-offset-2">
            <div class="left-sidebar">
               <h2>More Categories</h2>
               <div class="panel-group category-products" id="accordian">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                           <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                           Animals
                           </a>
                        </h4>
                     </div>
                     <div id="sportswear" class="panel-collapse collapse">
                        <div class="panel-body">
                           <ul>
                              <li><a href="./shop.php?search_string=dog">Dogs </a></li>
                              <li><a href="./shop.php?search_string=cat">Cats </a></li>
                              <li><a href="./shop.php?search_string=hedgehog">Hedgehogs </a></li>
                              <li><a href="./shop.php?search_string=cow">Cows</a></li>
                              <li><a href="./shop.php?search_string=koala">Koala </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                           <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                           Outdoors
                           </a>
                        </h4>
                     </div>
                     <div id="mens" class="panel-collapse collapse">
                        <div class="panel-body">
                           <ul>
                              <li><a href="./shop.php?search_string=landscape">Landscape</a></li>
                              <li><a href="./shop.php?search_string=sky">Sky</a></li>
                              <li><a href="./shop.php?search_string=cloud">Clouds</a></li>
                              <li><a href="./shop.php?search_string=tree">Trees</a></li>
                              <li><a href="./shop.php?search_string=sea">Sea</a></li>
                              <li><a href="./shop.php?search_string=sunset">Sunset</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title"><a href="./shop.php?search_string=art">Art</a></h4>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title"><a href="./shop.php?search_string=snow">Snow</a></h4>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title"><a href="./shop.php?search_string=sun">Sun</a></h4>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title"><a href="./shop.php?search_string=portrait">Portrait</a></h4>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title"><a href="./shop.php?search_string=green">Green</a></h4>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title"><a href="./shop.php?search_string=light">Light</a></h4>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title"><a href="./shop.php?search_string=park">Park</a></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="left-sidebar">
               <h2>Search by Artist </h2>
               <div class="brands-name">
                  <ul class="nav nav-pills nav-stacked">
                     <li><a href="artist.php"> <span class="pull-right">(50)</span>Sam </a></li>
                     <li><a href="artist.php"> <span class="pull-right">(56)</span>Eddie </a></li>
                     <li><a href="artist.php"> <span class="pull-right">(27)</span>Meg </a></li>
                     <li><a href="artist.php"> <span class="pull-right">(32)</span>Harry</a></li>
                     <li><a href="artist.php"> <span class="pull-right">(5)</span>Marisa</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <footer id="footer">
         <!--Footer-->
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-sm-2">
                     <div class="companyinfo">
                        <h2><span><img src="images/home/Logo.PNG" alt="ImageGrove" /></span></h2>
                        <p style="padding-left:20px;">The solution to all your image needs</p>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="address">
                        <img src="images/home/map.png" alt="" />
                        <p>1600 Holloway, San Francisco</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <p class="pull-left">Copyright © 2016 Image Grove. All rights reserved.</p>
               </div>
            </div>
         </div>
      </footer>
      <!--/Footer-->
      <script src="js/jquery.js"></script>
      <script src="js/price-range.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
