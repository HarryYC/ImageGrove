<!DOCTYPE HTML>
<html>
   <?php
      $page_title = "Home";
      include("./includes/head.php");
      include("./app/controllers/SearchResultsController.php");
      ?>
   <body>
      <?php
         $home_page = "true";
         include("./includes/header.php");
         ?>
      <div class="banner">
         <div class="container">
            <div class="span_1_of_1">
               <!--<h2 style="text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><br>Seach For Media Here</h2>-->
               <div class="search" style="margin-top: 100px;">
                  <ul class="nav1" style="margin-bottom: 0px;">
                     <li id="search">
                        <form action="./stock.php" method="get" >
                           <input type="text" name="search_string" id="search_text" placeholder="Search for Images" />
                        <div class="input-group-btn">
                           <button id="search_button" type="submit" >
                           <i style="color:white;"></i>
                           </button>
                        </div>
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="grid_1">
         <h3>Many Categories to Choose From</h3>
         <div class="col-md-2 col_1">
            <h4>Popular</h4>
         </div>
         <?php
            $searchResults = SearchResultsController::searchResults('a');
            echo "<li><form id='product_details' action='./product-details.php' method='GET'>";
            for ($i = 0; $i < 5; $i++) {
                echo "
                        <div class='col-md-2 col_1'>
                        
                            <button type='submit' style='padding: 0; border: 0;' name='image_id' value={$searchResults[$i]->getMediaId()}>
                            <img src='./PHP/get.php?id={$searchResults[$i]->getMediaId()}&type=ThumbNail' class='img-responsive' alt='' style='width:271px;height:181px;'>
                           </button></div>";
            }
            echo "</form></li>";
            ?>
         <div class="col-md-2 col_1">
            <h4>New Releases</h4>
         </div>
         <?php
            echo "<li><form id='product_details' action='./product-details.php' method='GET'>";
            for ($i = 5; $i < 10; $i++) {
                echo "
                        <div class='col-md-2 col_1'>
                        
                            <button type='submit' style='padding: 0; border: 0;' name='image_id' value={$searchResults[$i]->getMediaId()}>
                            <img src='./PHP/get.php?id={$searchResults[$i]->getMediaId()}&type=ThumbNail' class='img-responsive' alt='' style='width:271px;height:181px;'>
                           </button></div>";
            }
            echo "</form></li>";
            ?>
         <div class="clearfix"> </div>
      </div>
      <?php
         include("./includes/footer.php");
         ?>
   </body>
</html>