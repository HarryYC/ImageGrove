<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Image Details";
    include("./includes/head.php");
    ?>
    <body>
        <?php $home_page = "false";
        include("./includes/header.php"); ?>
        <div class="single">
            <div class="container">
                <div class="single_box1">
                    <div class="col-sm-5 single_left">
                        <?php echo "<img src='./PHP/get.php?id={$_GET['image_id']}&type=medium' class='img-responsive' alt=''/>" ?>
                    </div>
                    <div class="col-sm-7 col_6">
                        <ul class="size">
                            <h3>License Type:</h3>
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Web</a></li>
                            <li><a href="#">Unlimited</a></li>
                        </ul>
                        <a class="btn_3" href="/buy" id="buy">Buy this Photo</a>
                        <div class="messagepop pop">
                                <p>Thank you for purchasing this image!</p>
                                <p><br>Please contact us at 1(800)555-5555 and provide the Id number located above to finalize this purchase.</p>
                                <p><br></p>
                                <a class="close" href="/">Close</a></p>
                        </div>
                        
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
        
        <?php include("./includes/footer.php"); ?>
        
    </body>
</html>		