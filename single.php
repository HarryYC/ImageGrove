<!DOCTYPE HTML>
<html>
  <?php 
      $page_title = "Image Details";
      include("./includes/head.php");
  ?>
    <body>
  <?php  $home_page = "false"; include("./includes/header.php"); ?>
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
        
      <?php include("./includes/footer.php");?>
    </body>
</html>		