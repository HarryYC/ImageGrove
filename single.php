<!DOCTYPE HTML>
<html>
  <?php 
      $page_title = "Image Details";
      include("./includes/head.php");
  ?>
    <body>
       <?php include("./includes/header.php"); ?>
        <div class="single">
            <div class="container">
                <div class="single_box1">
                    <div class="col-sm-5 single_left">
                        <?php echo "<img src='./PHP/get.php?id={$_GET['image_id']}&type=medium' class='img-responsive' alt=''/>" ?>
                    </div>
                    <div class="col-sm-7 col_6">
                        <ul class="size">
                            <h3>Size</h3>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                        </ul>
                        <a class="btn_3" href="price.html">Buy this Photo</a>
                        <?php echo "<p class='movie_option'><strong>Id# : </strong>{$_GET['image_id']}</p>" ?>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <h4 class="tag_head">Description</h4>
                <!-- dynamic data for title of piece, artist info, etc... -->
                <div><?php echo "{$_GET['image_title']}" ?></div>
                <div><?php echo "by Artist Name here" ?></div>
                <div class="tags">
                </div>
            </div>
        </div>
        <div class="grid_2">
            <div class="container"> 
                <div class="col-md-3 col_2">
                    <h3>Stock Photo<br>Categories</h3>
                </div>
                <div class="col-md-9 col_5">
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Abstract">Abstract</a></li>
                            <li><a href="./stock.php?search_string=Animals">Animals</a></li>
                            <li><a href="./stock.php?search_string=Arts">The Arts</a></li>
                            <li><a href="./stock.php?search_string=Textures">Textures</a></li>
                            <li><a href="./stock.php?search_string=Fashion">Fashion</a></li>
                            <li><a href="./stock.php?search_string=Landmarks">Landmarks</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Business">Business</a></li>
                            <li><a href="./stock.php?search_string=Celebrities">Celebrities</a></li>
                            <li><a href="./stock.php?search_string=Editorial">Editorial</a></li>
                            <li><a href="./stock.php?search_string=Education">Education</a></li>
                            <li><a href="./stock.php?search_string=Food">Food</a></li>
                            <li><a href="./stock.php?search_string=Healthcare">Healthcare</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Holidays">Holidays</a></li>
                            <li><a href="./stock.php?search_string=Illustrations">Illustrations</a></li>
                            <li><a href="./stock.php?search_string=Industrial">Industrial</a></li>
                            <li><a href="./stock.php?search_string=Interiors">Interiors</a></li>
                            <li><a href="./stock.php?search_string=Miscellaneous">Miscellaneous</a></li>
                            <li><a href="./stock.php?search_string=Model">Model</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Nature">Nature</a></li>
                            <li><a href="./stock.php?search_string=Objects">Objects</a></li>
                            <li><a href="./stock.php?search_string=Parks">Parks</a></li>
                            <li><a href="./stock.php?search_string=People">People</a></li>
                            <li><a href="./stock.php?search_string=Religion">Religion</a></li>
                            <li><a href="./stock.php?search_string=Science">Science</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
      <?php include("./includes/footer.php");?>
    </body>
</html>		