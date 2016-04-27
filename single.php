<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Image Details";
    include("./includes/head.php");
    include("./ProductInfoClass.php");
    include("./ArtistInfoClass.php");
    ?>
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        $productInfo = new ProductInfo();
        //$currentImage is an array containing all info about image from db
        $currentImage = $productInfo->getProductMetadataById($_GET['image_id']);
        //$artist is an array containing all info about artist from db
        $artist = ArtistInfoClass::getArtistInfo($currentImage['Artist_Id']);
        $artistName = $artist['Name'];
        ?>
        <div class="single">
            <div class="container">
                <div class="single_box1">
                    <div class="col-sm-5 single_left">
                        <?php echo "<img src='./PHP/get.php?id={$_GET['image_id']}&type=ThumbNail' class='img-responsive' alt=''/>" ?>
                    </div>
                    <div class="col-sm-7 col_6">
                        <ul class="size">
                            <h3>License Type:</h3>
                            <li><a href="#"><?php echo ucfirst($currentImage['Licenses']); ?></a></li>
                            <!--                            <li><a href="#">Print</a></li>
                                                        <li><a href="#">Web</a></li>
                                                        <li><a href="#">Unlimited</a></li>-->
                        </ul>
                        <a class="btn_3" href="/buy" id="buy">Buy this Photo</a>
                        <div class="messagepop pop">
                            <p>Thank you for purchasing this image!</p>
                            <p><br>Please contact us via the link above or at 1(800)555-5555 and provide the Id number, #<?php echo "{$currentImage['Media_Id']}" ?>, to finalize this purchase.</p>
                            <p><br></p>
                            <a class="close" href="/">Close</a></p>
                        </div>

                        <?php echo "<p class='movie_option'><strong>Id# : </strong>{$currentImage['Media_Id']}</p>" ?>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <h4 class="tag_head">Image Details</h4>
                <!-- dynamic data for title of piece, artist info, etc... -->
                <div>Title: <?php echo "{$currentImage['Title']}" ?></div>
                <div>Description: <?php echo "{$currentImage['Description']}" ?></div>
                <div>Price: <?php echo "{$currentImage['Price']}" ?></div>
                <div>Artist: <?php echo $artistName ?></div>
                <div class="tags">
                </div>
            </div>
        </div>

        <?php include("./includes/footer.php"); ?>

    </body>
</html>     