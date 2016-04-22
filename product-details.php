<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>Product Details</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section>
 <div class="container">
            <div class="row">
<!--        <section id="search-box" >
                    <!-- search-box
                    <div class="container">
                        <div id="searchbar">
                            <form id="search-form" action="./shop.php" method="GET" enctype="multipart/form-data">
                                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-2">
                                    <div class="input-group input-group-lg">
                                        <input id="searchbox" class="form-control" type="text" name="search_string" placeholder="Search for Another Image">
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
                /searchbox
                <br><br>-->
               <h2 class="title text-center">Details for: "<?php echo $_GET['image_title']; ?>"</h2>
               <div class="col-sm-8 col-sm-offset-3">
                  <div class="product-details">
                     <!--product-details-->
                     <div class="col-sm-7">
                        <div class="view-product">
                           <?php echo "<img src='./PHP/get.php?id={$_GET['image_id']}&type=medium' />" ?>
                        </div>
                     </div>
                     <div class="col-sm-2 imageControlsAndShare" style="white-space: nowrap; width: 2%;">
                        <i data-toggle="tooltip" title="Zoom In" class="fa fa-plus-square fa-3x wow bounceIn"></i><br>
                        <i data-toggle="tooltip" title="Zoom Out" class="fa fa-minus-square fa-3x wow bounceIn"></i><br>
                        <i data-toggle="tooltip" title="Share on Facebook" class="fa fa-facebook-square fa-3x wow bounceIn"></i><br>
                        <i data-toggle="tooltip" title="Share on Twitter" class="fa fa-twitter-square fa-3x wow bounceIn"></i><br>
                        <i data-toggle="tooltip" title="Share on Pinterest" class="fa fa-pinterest-square fa-3x wow bounceIn"></i><br>
                        <i data-toggle="tooltip" title="Save to Favorites" class="fa fa-heart fa-3x wow bounceIn"></i><br>
                     </div>
                  </div>
                  <!--/product-details-->
                  <div class="container">
                     <div class="row">
                        <span>
                        <span>US $59</span> 
                        <button type="button" class="btn btn-fefault cart" onclick='buyAlert()'>
                        <i class="fa fa-shopping-cart"></i>
                        Buy
                        </button>
                        </span>                                
                     </div>
                     <div class="row">
                        <div class="col-sm-4 artInfoHeader">
                           <div class="artistPortrait">
                              <!-- programmatically get artist image out of db -->
                              <?php echo "<img src=\"images/hardcode/pamartist.JPG\" height=\"50\" width=\"50\" />" ?>
                           </div>
                           <div class="artInfo">
                              <!-- dynamic data for title of piece, artist info, etc... -->
                              <div><?php echo "{$_GET['image_title']}" ?></div>
                              <div><?php echo "by Artist Name here" ?></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div style="padding: 12px">
                           <p>Web ID: <?php echo "{$_GET['image_id']}" ?></p>
                        </div>
                     </div>
                     <div class="row">
                        <div style="padding: 12px">
                           <p><?php echo "put description here" ?></p>
                        </div>
                     </div>
                     <div class="row">
                        <div style="padding: 12px">
                           <p><?php echo "put metadata here" ?></p>
                        </div>
                     </div>
                  </div>
                  <div class="category-tab shop-details-tab">
                     <!--category-tab-->
                     <!--    Disable tabs and content to conform to mocks. This is the details/artist profile section beneath the image
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Details</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">Artist Profile</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="details" >
                            </div>
                        
                            <div class="tab-pane fade" id="companyprofile" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div> <!-- end of tabs section-->
                  </div>
                  <!--/category-tab-->
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
      <script>
         function purchaseAlert() {
             alert("Thank you for purchasing.");
         }
         function buyAlert() {
             alert("Please contact us via the Contact link above to put in an order for this item.");
         }
      </script>
   </body>
</html>