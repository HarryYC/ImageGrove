<!DOCTYPE html>
<html lang="en">
    <?php
    $page_title = "product-details";
    include("./includes/head.php");
    include("app/views/imageDetails/imageDetailView.php");
    $mediaId = $_GET['image_id'];
    $imageDetails = DisplayData($mediaId);

    $home_page = "false";
    include("./includes/header.php");

    if (isset($_GET['search_string'])) {
        $back_link = "stock.php?search_string={$_GET['search_string']}";
    } else {
        $back_link = "./index.php";
    }
    ?>

    <div class="container">
        <a href="<?php echo $back_link; ?>"><h4>Back</h4></a>
        <div class="row">
            <h2 class="title text-center"><?php echo $imageDetails['Title']; ?></h2>
            <div class="col-sm-8 col-sm-offset-3">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-7">
                        <div class="view-product">
                            <img style='height: 100%; width: 100%; object-fit: contain' src="data:image/jpeg;base64,<?php echo base64_encode(DisplayImage($mediaId)); ?>" />  
                        </div>
                    </div>
                </div>

                <!--/product-details-->
                <div class="container">
                    <div class="row">
                        <span style="color:black;">
                            <div><b>ArtistName: </b><?php echo "<a href=\"artist-page.php?artistID={$imageDetails['Artist_Id']}\">{$imageDetails['UserName']}</a>" ?></div>
                            <div><b>Web ID: </b><?php echo "{$imageDetails['Media_Id']}" ?></div>
                            <div><b>Description: </b><?php echo "{$imageDetails['Description']}" ?></div>
                            <div style="padding: 12px"> </div>
                            <div><b>Pricing:</b></div>
                            <?php if ($imageDetails['WebPrice'] != NULL) : ?>
                                <div class="radio">
                                    <label class="radio-inline"><input type="radio" name="optradio">Web Price:$<?php echo "{$imageDetails['WebPrice']}" ?></label>
                                </div>
                            <?php endif; ?>
                            <?php if ($imageDetails['PrintPrice'] != NULL) : ?>
                                <div class="radio">
                                    <label class="radio-inline"><input type="radio" name="optradio">Print Price:$<?php echo "{$imageDetails['PrintPrice']}" ?></label>
                                </div>
                            <?php endif; ?>
                            <?php if ($imageDetails['UnlimitedPrice'] != NULL) : ?>
                                <div class="radio disabled">
                                    <label class="radio-inline"><input type="radio" name="optradio">Unlimited Price:$<?php echo "{$imageDetails['UnlimitedPrice']}" ?></label><br>  
                                </div>
                            <?php endif; ?>
                        </span> 
                        <div text-align-left>
                            <button align =center type="button" class="btn btn-primary btn-sm" data-toggle='modal' data-target='#myModal'>Buy this Photo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
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
</body>
</html>