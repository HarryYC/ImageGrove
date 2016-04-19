<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>Search Results</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section>
         <div class="container">
            <section id="search-box" >
               <!--search-box-->
               <div class="container">
                  <div id="searchbar">
                     <form id="search-form" action="./shop.php" method="GET" enctype="multipart/form-data">
                        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-2">
                           <div class="input-group input-group-lg">
                              <input id="searchbox" class="form-control" type="text" name="search_string" value="<?php echo $_GET['search_string'] ?>">
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
            <br>
            <div class="row">
               <div class="col-sm-12 padding-right">
                  <div class="features_items">
                     <!--features_items-->
                     <h2 class="title text-center">Search Results for "<?php echo $_GET['search_string'] ?>"</h2>
                     <div class="col-sm-8 col-sm-offset-2">
                        <!-- filter box -->
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                 <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                 Filter this Search
                                 </a>
                              </h4>
                           </div>
                           <div id="mens" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <form name="myform" action="./shop.php?search_string=<?php echo $_GET['search_string']; ?>" method="POST">
                                    <div class="col-sm-6">
                                       Orientation: 
                                       <select name="orientation" onchange="this.form.submit()">
                                          <option disabled selected value> -- select an option -- </option>
                                          <option value="landscape">Landscape</option>
                                          <option value="portrait">Portrait</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6">
                                       Licenses Available: 
                                       <select name="license" onchange="this.form.submit()">
                                          <option disabled selected value> -- select an option -- </option>
                                          <option value="web">Web</option>
                                          <option value="print">Print</option>
                                          <option value="unlimited">Unlimited</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6">
                                       Size: 
                                       <select name="size" onchange="this.form.submit()">
                                          <option disabled selected value> -- select an option -- </option>
                                          <option value="small">Small</option>
                                          <option value="medium">Medium</option>
                                          <option value="large">Large</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6">
                                       Price Range: 
                                       <select name="price_range" onchange="this.form.submit()">
                                          <option disabled selected value> -- select an option -- </option>
                                          <option value="0">$0-$50</option>
                                          <option value="1">$50-$100</option>
                                          <option value="2">$100-$150</option>
                                          <option value="3">$150-$200</option>
                                          <option value="4">$200+</option>
                                       </select>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <br />
                        <div class="text-center">
                           <?php
                              if (isset($_POST['orientation']) && ($_POST['orientation'] != ""))
                                  $filter = "Orientation: " . $_POST['orientation'];
                              else if (isset($_POST['size']) && ($_POST['size'] != ""))
                                  $filter = "Size: " . $_POST['size'];
                              else if (isset($_POST['license']) && ($_POST['license'] != ""))
                                  $filter = "License: " . $_POST['license'];
                              else if (isset($_POST['price_range']) && ($_POST['price_range'] != ""))
                                  $filter = "Price Range: " . $_POST['price_range'];
                              if (isset($filter) && $filter != "")
                                  echo "<h4>Filtering search by " . $filter . "</h4>";
                              ?>
                        </div>
                        <br />
                     </div>
                     <!-- /filter box -->
                     <?php
                        $search_string = $_GET['search_string'];
                        
                        // Connect to the database
                        $dbLink = new mysqli('sfsuswe.com', 'earaujo', 'swes2016db', 'student_earaujo');
                        if (mysqli_connect_errno()) {
                            die("MySQL connection failed: " . mysqli_connect_error());
                        }
                        
                        // Query for a list of all existing files
                        $sql = 'SELECT id, description, imageTitle FROM `file`';
                        $result = $dbLink->query($sql);
                        
                        // Check if it was successfull
                        if ($result) {
                            // Make sure there are some files in there
                            if ($result->num_rows == 0) {
                                echo '<p>There are no files in the database</p>';
                            } else {
                        //                                     Print each file
                                while ($row = $result->fetch_assoc()) {
                                    if (strripos($row['description'], $search_string) !== false) {
                                        echo "
                                            <div class='col-sm-4'>
                                                <div class='product-image-wrapper'>
                                                    <div class='single-products'>
                                                        <div class='productinfo text-center'>
                                                            <form id='product_details' action='./product-details.php' method='GET'>
                                                                <input type='hidden' name='image_title' value='{$row['imageTitle']}'/>
                                                                <button type='submit' style='padding: 0; border: 0;' name='image_id' value='{$row['id']}'><img src='./PHP/get.php?id={$row['id']}&type=thumbnail' style='width:255px;height:250px;'></button>
                                                            </form>
                                                            <h2>$$$</h2>
                                                            <p>{$row['imageTitle']}</p>
                                                            <a onclick='buyAlert()' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>BUY</a>
                                                        </div>
                                                    </div>
                                                    <div class='choose'>
                                                        <ul class='nav nav-pills nav-justified'>
                                                            <li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>";
                                    }
                                }
                            }
                        //                                 Free the result
                            $result->free();
                        } else {
                            echo '<br/>Error! SQL query failed:';
                            echo "<pre>{$dbLink->error}</pre>";
                        }
                        
                        // Close the mysql connection
                        $dbLink->close();
                        ?>
                     <!--                            <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                        </ul>-->
                  </div>
                  <!--features_items-->
                  <br />
                  <!--                    <p>Click <a href="./index.html">here</a> to go back</p>-->
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
