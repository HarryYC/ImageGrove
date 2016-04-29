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
//        $artistName = $artist['Name'];
        ?>
        <div class="single">
            <div class="container">
                <div class="single_box1">
                    <div class="col-sm-5 single_left">
                        <?php echo "<img src='./PHP/get.php?id={$_GET['image_id']}&type=ThumbNail' class='img-responsive' alt=''/>" ?>
                    </div>
                    <div class="col-sm-7 col_6">
                        <ul class="size">
                            <li><?php echo "<p class='movie_option'  style='padding-left:11px;'><strong>Id# : </strong>{$currentImage['Media_Id']}</p>" ?></li>
                            <h3>License Type:</h3>
                            <li><a href="#"><?php echo ucfirst($currentImage['Licenses']); ?></a></li>
                            <!--                            <li><a href="#">Print</a></li>
                                                        <li><a href="#">Web</a></li>
                                                        <li><a href="#">Unlimited</a></li>-->
                            <li><button style='margin:45px 0 0 0; padding: 6px 18px;' type='button' class='btn_3' data-toggle='modal' data-target='#myModal'>Buy this Photo</button></li>
                        </ul>
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
                <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn btn-default" id="closebtn" data-dismiss="modal" style="position:absolute; top:10px; right:15px;">&times;</button>
                                    <h4 class="modal-title">Thank you!</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Please contact us via the Support link or at 1(800)555-5555 and provide the ID number for this image to finalize this purchase.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("./includes/footer.php"); ?>

    </body>
</html>     